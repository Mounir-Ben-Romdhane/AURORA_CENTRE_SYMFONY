<?php

namespace App\EventListener;

use App\Repository\NotificationRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\Security\Core\Security;

class NotificationListener
{
    private $session;
    private $security;
    private $notificationRepository;

    public function __construct(SessionInterface $session, Security $security, NotificationRepository $notificationRepository)
    {
        $this->session = $session;
        $this->security = $security;
        $this->notificationRepository = $notificationRepository;
    }

    public function onKernelResponse(ResponseEvent $event)
    {
        // Only inject notification data into the response if the user is authenticated
        if ($this->security->getUser()) {
            $userIdentifier = $this->security->getUser()->getUserIdentifier();
            $notifications = $this->notificationRepository->getNotifbyemail($userIdentifier);
            $event->getResponse()->headers->set('X-Notifications', json_encode($notifications));
        }
    }
}