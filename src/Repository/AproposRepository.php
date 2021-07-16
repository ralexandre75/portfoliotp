<?php

namespace App\Repository;

use App\Entity\Apropos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Apropos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Apropos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Apropos[]    findAll()
 * @method Apropos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AproposRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Apropos::class);
    }

    // /**
    //  * @return Apropos[] Returns an array of Apropos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Apropos
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function findAllApropos(){
        return $this->createQueryBuilder('faa')
           /*  ->andWhere('fls.id > :val') //on cherche une id supérieur à une certaine valeur
            ->setParameter('val', 0, 'int') // on définit la valeur 
            ->orderBy('fls.id', 'DESC') // tri par id décroissant
            ->setMaxResults(6) // on selectionne 6 resultat (LIMIT)*/
            ->getQuery() // requête
            ->getResult() //résultat(s)
        ;


    }
}
