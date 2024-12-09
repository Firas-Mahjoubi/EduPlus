<?php

namespace App\Repository;

use App\Entity\Ressource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ressource>
 */
class RessourcesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ressource::class);
    }

    // /**
    //  * Find resources by a search term in their name.
    //  *
    //  * @param string $search The search term.
    //  * @return Ressource[] Returns an array of Ressource objects.
    //  */
    // public function findBySearch(string $search): array
    // {
    //     return $this->createQueryBuilder('r')
    //         ->andWhere('r.nomRessource LIKE :search')
    //         ->setParameter('search', '%' . $search . '%')
    //         ->getQuery()
    //         ->getResult();
    // }
    public function searchByQuery(string $query): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('LOWER(r.Type) LIKE :query OR LOWER(r.nomRessource) LIKE :query')
            ->setParameter('query', '%' . strtolower($query) . '%')
            ->getQuery()
            ->getResult();
    }
    
}
