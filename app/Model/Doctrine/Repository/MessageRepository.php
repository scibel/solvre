<?php

namespace Solvre\Model\Doctrine\Repository;

use Crypt;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Solvre\Model\Doctrine\Entity\Message;
use Solvre\Model\Doctrine\Entity\User;
use Solvre\Model\Doctrine\Traits\OrmSaver;
use Solvre\Views\Email\MailContent;

/**
 * MessageRepository
 *
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class MessageRepository extends EntityRepository
{
    use OrmSaver;

    /**
     * @param MailContent $mailContent
     * @param User $user
     * @param string $token
     */
    public function registerActivationMail($mailContent, $user, $token)
    {
        $message = new Message();
        $message->setCode($token);
        $message->setUser($user);
        $message->setSubject('email.account.created');
        $message->setToFullName( $user->getFirstName() );
        $message->setContent(Crypt::encrypt($mailContent->accountActivation($user, $token)));
        $message->setSentFrom(env('MAIL_REGISTER'));
        $message->setSentTo($user->getEmail());

        $this->save($message);
    }

    public function getNotActiveByCode($code)
    {
        $queryString = /** @lang MySQL */
            'SELECT m ' .
            'FROM ' . Message::class . ' m ' .
            'JOIN m.user user ' .
            'WHERE m.code = :token ' .
            'AND m.active IS NULL ' .
            'OR m.active = false '
        ;
//
        /** @var Query $query */
        $query = $this->_em->createQuery($queryString);
        $query->setParameter('token', $code);
        return $query->getSingleResult();
    }
}
