<?php

namespace App\Repository;

use App\Entity\Club;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Club>
 */
class ClubRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Club::class);
    }
    // src/Repository/ClubRepository.php


    public function findByName(string $name): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.nom LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->getQuery()
            ->getResult();
    }

    // src/Repository/ApplicationClubRepository.php

    public function getApplicationsCountByMonthAndStatus(Club $club): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select("DATE_FORMAT(a.createdAt, '%Y-%m') as month, a.status, COUNT(a.id) as count")
            ->where('a.club = :club')
            ->setParameter('club', $club)
            ->groupBy('month, a.status')
            ->orderBy('month', 'ASC');

        return $qb->getQuery()->getResult();
    }


    //    /**
    //     * @return Club[] Returns an array of Club objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Club
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
