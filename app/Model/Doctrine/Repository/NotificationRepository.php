<?php

namespace Solvre\Model\Doctrine\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Solvre\Model\Doctrine\Entity\Notification;
use Solvre\Model\Doctrine\Entity\User;

/**
 * NotificationRepository
 *
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class NotificationRepository extends EntityRepository
{
    /**
     *
     * @param $userId
     * @return array
     */
    public function findFor($userId)
    {
        $queryString = 'SELECT notification ' .
            'FROM '. Notification::class .' notification ' .
            'LEFT JOIN notification.user user ' .
            'WHERE user.id = :userId ' .
            'AND notification.isRead = false ' .
            ''
        ;
//
        /** @var Query $query */
        $query = $this->_em->createQuery($queryString);
        $query->setParameter('userId', 0);
        return $query->setMaxResults('5')->getResult();
    }
}
