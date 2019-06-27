<?php

namespace App\Repository;

use App\Entity\Survey;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Survey|null find($id, $lockMode = null, $lockVersion = null)
 * @method Survey|null findOneBy(array $criteria, array $orderBy = null)
 * @method Survey[]    findAll()
 * @method Survey[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SurveyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Survey::class);
    }

    public function findLastSurveys($limit)
    {
      return $this->createQueryBuilder('s')
                  ->select('s.title as title, s.description as description')
                  ->groupBy('s')
                  ->orderBy('s.createdAt','DESC')
                  ->setMaxResults($limit)
                  ->getQuery()
                  ->getResult();
    }
}
