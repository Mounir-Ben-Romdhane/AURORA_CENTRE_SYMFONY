<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    public function save(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function getclaimbyemail($email){
        return $this->findBy(['email_connecte'=>$email]);

    }

    public function remove(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function orderByType()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.type', 'ASC')
            ->getQuery()->getResult();
    }
    public function orderByTypeDESC()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.type', 'DESC')
            ->getQuery()->getResult();
    }
    public function orderByNom()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.nom', 'ASC')
            ->getQuery()->getResult();
    }
    public function orderByNomDESC()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.nom', 'DESC')
            ->getQuery()->getResult();
    }
    public function orderBydate(){
        return $this->createQueryBuilder('s')
        ->orderBy('s.date_reclamation','ASC')
        ->getQuery()
        ->getResult();
    }
    public function orderBydateDESC(){
        return $this->createQueryBuilder('s')
        ->orderBy('s.date_reclamation','DESC')
        ->getQuery()
        ->getResult();
    }


//    /**
//     * @return Reclamation[] Returns an array of Reclamation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reclamation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
