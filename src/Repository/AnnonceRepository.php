<?php

namespace App\Repository;

use App\Entity\Annonce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Annonce>
 *
 * @method Annonce|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annonce|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annonce[]    findAll()
 * @method Annonce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnonceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Annonce::class);
    }

    public function save(Annonce $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Annonce $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Annonce[] Returns an array of Annonce objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Annonce
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function findAllSortedByDate(): array { 
    return $this->createQueryBuilder('a')
    ->orderBy('a.date', 'ASC')
    ->getQuery()
    ->getResult() ;
 }
 public function searchByTitre(string $titre): array
{
    $query = $this->createQueryBuilder('a')
    ->where('a.titre = :titre')
    ->setParameter('titre', $titre);

    return $query->getQuery()->getResult();
}

public function findByNom($classification)
{
    $query = $this->createQueryBuilder('a')
        ->select('a')
        ->join('a.classification', 'c')
        ->where('c.nom LIKE :nom')
        ->setParameter('nom', '%' . $classification . '%')
        ->getQuery();

    return $query->getResult();
}

public function findByTitle(string $titre)
{
    $qb = $this->createQueryBuilder('a')
        ->where('a.titre LIKE :titre')
        ->setParameter('title', '%' . $titre . '%');

    return $qb->getQuery()->getResult();
}

public function orderByTitre(){
    $req=$this->createQueryBuilder('s')
               ->orderBy('s.titre','ASC')
               ->getQuery()
               ->getResult();
               return $req;


}
public function search($mots = null, $classification = null){
    $query = $this->createQueryBuilder('a');
    $query->where('a.active = 1');
    if($mots != null){
        $query->andWhere('MATCH_AGAINST(a.titre) AGAINST (:mots boolean)>0')
            ->setParameter('mots', $mots);
    }
    if($classification != null){
        $query->leftJoin('a.classification', 'c');
        $query->andWhere('c.id = :id')
            ->setParameter('id', $classification);
    }
    return $query->getQuery()->getResult();
}
}
