<?php

namespace App\Service;

use Doctrine\Common\Persistence\ObjectManager;

class StatsManager
{
    private $manager;

    /**
     * StatsManager constructor.
     * @param ObjectManager $manager
     */
    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    public function getUsersCount()
    {
        return $this->manager->createQuery('SELECT COUNT(u) From App\Entity\User u')->getSingleScalarResult();
    }

    public function getQuestionsCount()
    {
        return $this->manager->createQuery('SELECT COUNT(q) From App\Entity\Question q')->getSingleScalarResult();
    }

    public function getAnswersCount()
    {
        return $this->manager->createQuery('SELECT COUNT(a) From App\Entity\Answer a')->getSingleScalarResult();
    }

    public function getCategoriesCount()
    {
        return $this->manager->createQuery('SELECT COUNT(c) From App\Entity\Category c')->getSingleScalarResult();
    }

    public function getSurveysCount()
    {
        return $this->manager->createQuery('SELECT COUNT(s) From App\Entity\Survey s')->getSingleScalarResult();
    }

}