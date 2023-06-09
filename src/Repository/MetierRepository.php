<?php

namespace App\Repository;

use App\Entity\Metier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Metier>
 *
 * @method Metier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Metier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Metier[]    findAll()
 * @method Metier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MetierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Metier::class);
    }

    public function save(Metier $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Metier $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }







    public function SortByid(){
        return $this->createQueryBuilder('e')
            ->orderBy('e.id','ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function SortBynom()
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.nom','ASC')
            ->getQuery()
            ->getResult()
            ;
    }


    public function SortByType()
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.type','ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function SortByDescription()
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.description','ASC')
            ->getQuery()
            ->getResult()
            ;
    }







    public function findByid( $id)
    {
        return $this-> createQueryBuilder('e')
            ->andWhere('e.id LIKE :id')
            ->setParameter('id','%' .$id. '%')
            ->getQuery()
            ->execute();
    }
    public function findBynomBlock( $nom)
    {
        return $this-> createQueryBuilder('e')
            ->andWhere('e.nom LIKE :nom')
            ->setParameter('nom','%' .$nom. '%')
            ->getQuery()
            ->execute();
    }
    public function findBynomPatient( $type)
    {
        return $this-> createQueryBuilder('e')
            ->andWhere('e.type LIKE :type')
            ->setParameter('type','%' .$type. '%')
            ->getQuery()
            ->execute();
    }
    public function findBynomMedecin( $description)
    {
        return $this-> createQueryBuilder('e')
            ->andWhere('e.description LIKE :description')
            ->setParameter('description','%' .$description. '%')
            ->getQuery()
            ->execute();
    }














//    /**
//     * @return Metier[] Returns an array of Metier objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Metier
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
