<?php

namespace App\Repository;

use App\Entity\Answer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Answer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Answer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Answer[]    findAll()
 * @method Answer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnswerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Answer::class);
    }

    public function findBySurveyAnswer($id)
    {
        $query = $this->createQueryBuilder('a')
          ->select('a')
          ->join('a.quizAnswers', 'sa')
          ->join('sa.quiz', 's')
          ->where('sa.id = :id')
          ->setParameter('id', $id)
          ->getQuery()
          ->getResult();

        return $query;
    }

    public function countBySurveyAnswer($id)
    {
        $query = $this->createQueryBuilder('a')
          ->join('a.quizAnswers','sa')
          ->where('a.id = :id')
          ->setParameter('id', $id)
          ->select('COUNT(sa)')
          ->getQuery()
          ->getSingleScalarResult();

        return $query;
    }
}
