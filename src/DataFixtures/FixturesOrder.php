<?php

namespace App\DataFixtures;

class FixturesOrder
{
    private static $orders = [
      UserFixtures::class => 100,
      CategoryFixtures::class => 200,
      QuestionFixtures::class => 300,
      AnswerFixtures::class => 400,
    ];

    public static function getOrder($class)
    {
        return self::$orders[$class];
    }
}
