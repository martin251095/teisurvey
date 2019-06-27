<?php

namespace App\DataFixtures;

use App\Entity\Question;
use App\Service\TranslationManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Faker\Factory;

class QuestionFixtures extends Fixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    public const QUESTION_REFERENCE = 'question';

    private $translationManager;

    public function __construct(TranslationManager $translationManager)
    {
        $this->translationManager = $translationManager;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('En-en');
        $emTranslation = $this->translationManager;

        // Questions Management

        for ($i = 1; $i <= 30; $i++) {
            $question = new Question();

            $j = 1;
            $categories = [];
            while ($this->hasReference(CategoryFixtures::CATEGORY_REFERENCE . '_' . $j)) {
                $categories[] = $this->getReference(CategoryFixtures::CATEGORY_REFERENCE . '_' . $j);
                $j++;
            }

            $statement = $faker->sentence();

            $key = mt_rand(0, count($categories) - 1);
            if (isset($categories[$key])) {
                $category = $categories[$key];
            } else {
                $category = null;
            }

            $long = null;

            $question
              ->setQuestion($statement)
              ->setQuestionFr($statement)
              ->setQuestionNl($statement)
              ->setCategory($category)
              ->setPoint(mt_rand(0, 5))
              ->setLongQuestion($long)
              ->setLongQuestionFr($long)
              ->setLongQuestionNl($long)
              ->setMultipleAnswers(mt_rand(0, 1));

            $manager->persist($question);
            $manager->flush();

            $this->addReference(self::QUESTION_REFERENCE . '_' . $i, $question);

            $emTranslation->saveTranslations($question);
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
