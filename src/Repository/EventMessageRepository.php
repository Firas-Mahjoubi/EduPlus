<?php

namespace App\Repository;

use App\Entity\EventMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EventMessage>
 */
class EventMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EventMessage::class);
    }

    /**
     * Get messages for a specific event, ordered by creation date.
     *
     * @param int $eventId
     * @return EventMessage[]
     */
    public function findByEvent(int $eventId): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.event = :eventId')
            ->setParameter('eventId', $eventId)
            ->orderBy('m.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get messages for a specific event with pagination.
     *
     * @param int $eventId
     * @param int $limit
     * @param int $offset
     * @return EventMessage[]
     */
    public function findByEventWithPagination(int $eventId, int $limit, int $offset): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.event = :eventId')
            ->setParameter('eventId', $eventId)
            ->orderBy('m.createdAt', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Get messages by a specific user.
     *
     * @param int $userId
     * @return EventMessage[]
     */
    public function findByUser(int $userId): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.user = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('m.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
