<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Question extends \App\Entity\Question implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'question', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'answers', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'point', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'longQuestion', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'multipleAnswers', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'weight', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'locale', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'questionFr', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'questionNl', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'longQuestionFr', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'longQuestionNl', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'quizAnswers'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'question', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'answers', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'point', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'longQuestion', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'multipleAnswers', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'weight', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'locale', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'questionFr', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'questionNl', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'longQuestionFr', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'longQuestionNl', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'quizAnswers'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Question $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestion', []);

        return parent::getQuestion();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestion(string $question): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestion', [$question]);

        return parent::setQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswers', []);

        return parent::getAnswers();
    }

    /**
     * {@inheritDoc}
     */
    public function addAnswer(\App\Entity\Answer $answer): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAnswer', [$answer]);

        return parent::addAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAnswer(\App\Entity\Answer $answer): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAnswer', [$answer]);

        return parent::removeAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuizAnswers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuizAnswers', []);

        return parent::getQuizAnswers();
    }

    /**
     * {@inheritDoc}
     */
    public function addQuizAnswer(\App\Entity\QuizAnswer $quizAnswer): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addQuizAnswer', [$quizAnswer]);

        return parent::addQuizAnswer($quizAnswer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeQuizAnswer(\App\Entity\QuizAnswer $quizAnswer): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeQuizAnswer', [$quizAnswer]);

        return parent::removeQuizAnswer($quizAnswer);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory(): ?\App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(?\App\Entity\Category $category): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoint(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoint', []);

        return parent::getPoint();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoint(string $point): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoint', [$point]);

        return parent::setPoint($point);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongQuestion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongQuestion', []);

        return parent::getLongQuestion();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongQuestion(?string $longQuestion): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongQuestion', [$longQuestion]);

        return parent::setLongQuestion($longQuestion);
    }

    /**
     * {@inheritDoc}
     */
    public function isMultipleAnswers(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isMultipleAnswers', []);

        return parent::isMultipleAnswers();
    }

    /**
     * {@inheritDoc}
     */
    public function setMultipleAnswers(bool $multipleAnswers): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMultipleAnswers', [$multipleAnswers]);

        return parent::setMultipleAnswers($multipleAnswers);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', []);

        return parent::getWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight(int $weight): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', [$weight]);

        return parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setTranslatableLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTranslatableLocale', [$locale]);

        return parent::setTranslatableLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestionFr(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestionFr', []);

        return parent::getQuestionFr();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestionFr($questionFr): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestionFr', [$questionFr]);

        return parent::setQuestionFr($questionFr);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestionNl(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestionNl', []);

        return parent::getQuestionNl();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestionNl($questionNl): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestionNl', [$questionNl]);

        return parent::setQuestionNl($questionNl);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongQuestionFr(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongQuestionFr', []);

        return parent::getLongQuestionFr();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongQuestionFr($longQuestionFr): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongQuestionFr', [$longQuestionFr]);

        return parent::setLongQuestionFr($longQuestionFr);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongQuestionNl(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongQuestionNl', []);

        return parent::getLongQuestionNl();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongQuestionNl($longQuestionNl): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongQuestionNl', [$longQuestionNl]);

        return parent::setLongQuestionNl($longQuestionNl);
    }

}
