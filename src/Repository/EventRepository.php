<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Event>
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    /**
     * Find upcoming events based on the current date and an optional search term.
     *
     * @param string|null $search Search term for event titles.
     * @return Event[]
     */
    public function findUpcomingEvents(?string $search = null): array
    {
        $qb = $this->createQueryBuilder('e')
            ->where('e.datedebut > :now') // Updated field name
            ->setParameter('now', new \DateTime())
            ->orderBy('e.datedebut', 'ASC'); // Updated field name
    
        if ($search) {
            $qb->andWhere('e.titre LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }
    
        return $qb->getQuery()->getResult();
    }
    

    /**
     * Find the latest past events based on the current date and an optional search term.
     *
     * @param string|null $search Search term for event titles.
     * @return Event[]
     */
    public function findLatestEvents(?string $search = null): array
    {
        $qb = $this->createQueryBuilder('e')
            ->where('e.datefin < :now') // Use the correct field name here
            ->setParameter('now', new \DateTime())
            ->orderBy('e.datefin', 'DESC'); // Use the correct field name here
    
        if ($search) {
            $qb->andWhere('e.titre LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }
    
        return $qb->getQuery()->getResult();
    }
    public function findBySearch(string $search): array
    {
        $qb = $this->createQueryBuilder('e')
            ->where('e.titre LIKE :search')
            ->setParameter('search', '%'.$search.'%')
            ->orderBy('e.datedebut', 'ASC'); // Or any other sorting method you prefer

        return $qb->getQuery()->getResult();
    }
    
}
