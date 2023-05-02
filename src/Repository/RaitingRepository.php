<?php

namespace App\Repository;

use App\Entity\Raiting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Data\SearchData;


class RaitingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Raiting::class);
    }

    public function save(Raiting $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Raiting $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }



public function findByTitre($titre)
{
    return $this->createQueryBuilder('e')
        ->andWhere('e.titre LIKE :titre')
        ->setParameter('titre', '%' . $titre . '%')
        ->getQuery()
        ->getResult()
    ;
}





public function findPlanBySujet($sujet){
    return $this->createQueryBuilder('ex')
        ->andWhere('ex.Lieu LIKE :sujet ')
        ->setParameter('sujet', '%'.$sujet.'%')
        ->getQuery()
        ->getResult();
}




public function findExcursionByLieu($Lieu)
{
    return $this->createQueryBuilder('e')
        ->where('e.Lieu LIKE :Lieu')
        ->setParameter('Lieu', '%' . $Lieu . '%')
        ->getQuery()
        ->getResult();
}
}
