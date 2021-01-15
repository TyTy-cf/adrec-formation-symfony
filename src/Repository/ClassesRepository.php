<?php

namespace App\Repository;

use App\Entity\Classes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Classes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Classes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Classes[]    findAll()
 * @method Classes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Classes::class);
    }

//    /**
//     * @param $name
//     * @param $level
//     * @return Classes[]    // Returns an array of Classes objects
//     */
    /**
     * @param $name
     * @param $level
     * @return array
     */
    public function findByLevelOfClasse($name, $level): array
    {
        return $this->createQueryBuilder('classes')
            ->select('name', 'level')
            ->where('classes.name = :name')
            ->setParameter('name', $name)
            ->andWhere('classes.level = :level')
            ->setParameter('level', $level)
            ->orderBy('classes.level', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return Classes[] Returns an array of Classes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Classes
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}