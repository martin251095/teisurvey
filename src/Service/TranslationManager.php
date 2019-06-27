<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Class TranslationManager
 * @package App\Service
 */
class TranslationManager
{
    /** @var \Doctrine\ORM\EntityManagerInterface */
    private $entityManager;

    /** @var array Available locales in app */
    private $locales = [];

    /** @var string $locale Current locale used fos translate entities */
    private $locale;

    /** @var string $defaultLocale Default application locale */
    private $defaultLocale;

    /** @var array Available locales in app */
    private $availableLocales = [];

    /**
     * TranslationManager constructor.
     * @param \Doctrine\ORM\EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager, string $translatableLocales, string $defaultLocale)
    {
        $this->entityManager = $entityManager;
        $this->locales = explode('|', $translatableLocales);
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * @return mixed|null
     */
    public function getAvailableLocales()
    {
        if (empty($this->availableLocales))  {
            $this->availableLocales[$this->defaultLocale] = $this->defaultLocale;
            foreach($this->locales as $locale) {
                $this->availableLocales[$locale] = $locale;
            }
        }

        return $this->availableLocales;
    }

    /**
     * @param $locale
     * @return self
     */
    public function setLocale($locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Set translations for entity
     * @param object $entity
     * @return object
     */
    public function setTranslations(&$entity)
    {
        $entityClassName = (new \ReflectionClass($entity))->getShortName();

        /** @var \Gedmo\Translatable\Entity\Repository\TranslationRepository $repository */
        $repository = $this->entityManager->getRepository('App\Entity\Translation\\'.$entityClassName.'Translation');
        $translations = $repository->findTranslations($entity);

        foreach ($translations as $locale => $values) {
            foreach ($values as $field => $value) {
                if (method_exists($entity, 'set'.ucfirst($field).ucfirst(($locale)))) {
                    $entity->{'set'.ucfirst($field).ucfirst($locale)}($value);
                }
            }
        }

        return $entity;
    }

    /**
     * Save translations for entity
     * @param object $entity
     * @return self
     */
    public function saveTranslations($entity): self
    {
        foreach ($this->locales as $locale) {
            $this->saveLocale($entity, $locale);
        }

        return $this;
    }

    /**
     * Save translations for entity
     * @param object $entity
     * @param string $locale
     * @return self
     */
    public function saveLocale($entity, string $locale): self
    {
        // Refresh entity to default locale to save correct translations
        $entity->setTranslatableLocale($this->defaultLocale);
        $this->entityManager->refresh($entity);

        try {
            $translatables = $entity::TRANSLATABLE;

            foreach ($translatables as $translatable) {
                if (method_exists($entity, 'get'.ucfirst($translatable).ucfirst($locale))) {
                    $entityClassName = (new \ReflectionClass($entity))->getShortName();
                    /** @var \Gedmo\Translatable\Entity\Repository\TranslationRepository $repo */
                    $repo = $this->entityManager->getRepository(
                      'App\Entity\Translation\\'.$entityClassName.'Translation'
                    );

                    $fieldValue = $entity->{'get'.ucfirst($translatable).ucfirst($locale)}();
                    $repo->translate($entity, $translatable, $locale, $fieldValue);
                }
            }
            $this->entityManager->persist($entity);
            $this->entityManager->flush();
        } catch (\Exception $e) {

        }

        return $this;
    }

    /**
     * Refresh translated entity
     * @param object $entity Passed by reference !!
     * @return self
     */
    public function setEntityTranslations(&$entity): self
    {
        if (method_exists($entity, 'setTranslatableLocale')) {
            $entity->setTranslatableLocale($this->locale);
            $this->entityManager->refresh($entity);
        }

        return $this;
    }

}