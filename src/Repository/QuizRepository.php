<?php

namespace App\Repository;

use App\Entity\Quiz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Quiz|null find($id, $lockMode = null, $lockVersion = null)
 * @method Quiz|null findOneBy(array $criteria, array $orderBy = null)
 * @method Quiz[]    findAll()
 * @method Quiz[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuizRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Quiz::class);
    }

    public function findLastQuizzes($limit)
    {
      return $this->createQueryBuilder('q')
                  ->select('q.title as title, q.description as description')
                  ->groupBy('q')
                  ->orderBy('q.createdAt','DESC')
                  ->setMaxResults($limit)
                  ->getQuery()
                  ->getResult();
    }

}
