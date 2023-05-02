<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evenement>
 *
 * @method Evenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenement[]    findAll()
 * @method Evenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    public function save(Evenement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Evenement $entity, bool $flush = false): void
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
      
      public function SortBytitre()
      {
        return $this->createQueryBuilder('e') /*  créer une nouvelle instance d'une requête de sélection */
            ->orderBy('e.titre','ASC')
            ->getQuery()
            ->getResult()
            ;
      }
      
      public function findByid( $id)
      {
          return $this-> createQueryBuilder('t')
              ->andWhere('t.id LIKE :id')
              ->setParameter('id','%' .$id. '%')
              ->getQuery()
              ->execute();
      }
      public function findBytitre( $titre)
      {
          return $this-> createQueryBuilder('e')
              ->andWhere('e.titre LIKE :titre')
              ->setParameter('titre','%' .$titre. '%')
              ->getQuery()
              ->execute();
      }
    

}
