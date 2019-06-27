<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Service\TranslationManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Faker\Factory;

class AnswerFixtures extends Fixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $translationManager;

    public function __construct(TranslationManager $translationManager)
    {
        $this->translationManager = $translationManager;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('En-en');
        $emTranslation = $this->translationManager;

        // Answers Management

        for ($i = 1; $i <= 120; $i++) {
            $answer = new Answer();

            $j = 1;
            $questions = [];
            while ($this->hasReference(QuestionFixtures::QUESTION_REFERENCE . '_' . $j)) {
                $questions[] = $this->getReference(QuestionFixtures::QUESTION_REFERENCE . '_' . $j);
                $j++;
            }

            $statement = $faker->sentence();

            $key = mt_rand(0, count($questions) - 1);
            if(isset($questions[$key])) {
                $question = $questions[$key];
            } else {
                $question = null;
            }

            $answer
              ->setAnswer($statement)
              ->setAnswerFr($statement)
              ->setAnswerNl($statement)
              ->setQuestion($question)
              ->setIsCorrect(mt_rand(0, 1))
              ->setPoint(mt_rand(0, 3));

            $manager->persist($answer);
            $manager->flush();
            $emTranslation->saveTranslations($answer);
        }
    }

    /**
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getOrder()
    {
        return FixturesOrder::getOrder(self::class);
    }
}
