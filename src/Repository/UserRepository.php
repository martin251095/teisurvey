<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Find the user associated to the given token value or return null
     * @param $token
     */
    public function findOneByToken($token)
    {
        $query = $this->createQueryBuilder('u')
          ->join('u.tokens', 't')
          ->where('t.value = :token')
          ->andWhere('u.enabled = 1')
          ->setParameter('token', $token)
          ->getQuery()
          ->getOneOrNullResult();

        return $query;
    }
}
