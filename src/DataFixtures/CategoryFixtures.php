<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Service\TranslationManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Faker\Factory;

class CategoryFixtures extends Fixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    public const CATEGORY_REFERENCE = 'category';

    private $translationManager;

    public function __construct(TranslationManager $translationManager)
    {
        $this->translationManager = $translationManager;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('En-en');
        $emTranslation = $this->translationManager;

        // Category Management

        for ($i = 1; $i <= 10; $i++) {
            $category = new Category();

            $name = $faker->word();

            $category
              ->setName($name)
              ->setNameFr($name)
              ->setNameNl($name);

            $manager->persist($category);
            $manager->flush();

            $this->addReference(self::CATEGORY_REFERENCE . '_' . $i, $category);

            $emTranslation->saveTranslations($category);
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
