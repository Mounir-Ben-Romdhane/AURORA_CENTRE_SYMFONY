<?php

namespace App\Repository;

use App\Entity\Participationns;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Twilio\Rest\Client;


/**
 * @extends ServiceEntityRepository<Participationns>
 *
 * @method Participationns|null find($id, $lockMode = null, $lockVersion = null)
 * @method Participationns|null findOneBy(array $criteria, array $orderBy = null)
 * @method Participationns[]    findAll()
 * @method Participationns[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipationnsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Participationns::class);
    }

    public function save(Participationns $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Participationns $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Participationns[] Returns an array of Participationns objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Participationns
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }






public  function sms(){
    // Your Account SID and Auth Token from twilio.com/console
    
            $sid = 'AC93ce05ca52439d2cc91aa39a64981bfe';

            $auth_token = '83b577d752355a928583f5982803a940';
    // In production, these should be environment variables. E.g.:
    // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
    // A Twilio number you own with SMS capabilities
    
            $twilio_number = "+15077095484";
    
            $client = new Client($sid, $auth_token);
            $client->messages->create(
            // the number you'd like to send the message to
    
                '+21699850223',
                [
                    // A Twilio phone number you purchased at twilio.com/console
              
    'from' => '+15077095484',
                    // the body of the text message you'd like to send
                    'body' => 'Nous avons répondu à votre participation,allez vérifier !!'
                ]
            );
        }




}
