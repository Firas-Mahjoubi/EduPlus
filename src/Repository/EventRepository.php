<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

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
     * Find upcoming events that have a start date greater than or equal to the current date.
     *
     * @param \DateTimeInterface $currentDate
     * @return Event[]
     */
   // EventRepository.php

// Find upcoming events (greater than or equal to current date)
public function findUpcomingEvents(\DateTimeInterface $currentDate): array
{
    return $this->createQueryBuilder('e')
        ->where('e.datedebut >= :date')
        ->setParameter('date', $currentDate)
        ->orderBy('e.datedebut', 'ASC')  // Order by start date ascending
        ->getQuery()
        ->getResult();
}

// Find latest events (last X events by descending start date)
public function findLatestEvents(int $limit): array
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.datedebut', 'DESC') // Order by start date descending
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
}


 
   
}
