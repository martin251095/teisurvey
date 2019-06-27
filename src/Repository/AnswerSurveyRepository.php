<?php

namespace App\Repository;

use App\Entity\AnswerSurvey;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AnswerSurvey|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnswerSurvey|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnswerSurvey[]    findAll()
 * @method AnswerSurvey[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnswerSurveyRepository extends ServiceEntityRepository
{
  public function __construct(RegistryInterface $registry)
  {
    parent::__construct($registry, AnswerSurvey::class);
  }

  public function findBySurveyAnswer($id)
  {
    $query = $this->createQueryBuilder('a')
      ->select('a')
      ->join('a.surveyAnswers', 'sa')
      ->join('sa.survey', 's')
      ->where('sa.id = :id')
      ->setParameter('id', $id)
      ->getQuery()
      ->getResult();

    return $query;
  }

  public function countBySurveyAnswer($id)
  {
    $query = $this->createQueryBuilder('a')
      ->join('a.surveyAnswers','sa')
      ->where('a.id = :id')
      ->setParameter('id', $id)
      ->select('COUNT(sa)')
      ->getQuery()
      ->getSingleScalarResult();

    return $query;
  }
}
