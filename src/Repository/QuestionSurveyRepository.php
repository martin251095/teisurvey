<?php

namespace App\Repository;

use App\Entity\QuestionSurvey;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QuestionSurvey|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionSurvey|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionSurvey[]    findAll()
 * @method QuestionSurvey[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionSurveyRepository extends ServiceEntityRepository
{
  public function __construct(RegistryInterface $registry)
  {
    parent::__construct($registry, QuestionSurvey::class);
  }
}
