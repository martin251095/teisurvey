<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class AnswerSurvey
 * @package App\Entity
 * @ORM\Table(name="answer_survey")
 * @ORM\Entity(repositoryClass="App\Repository\AnswerSurveyRepository")
 * @Gedmo\TranslationEntity(class="App\Entity\Translation\AnswerSurveyTranslation")
 */
class AnswerSurvey implements Translatable
{
    /**
     * Translatable fields
     */
    const TRANSLATABLE = [
      'answer',
    ];

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @Gedmo\Translatable
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $answer;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $weight = 1;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @Gedmo\Locale
     * Used locale to override Translation listener`s locale
     * this is not a mapped field of entity metadata, just a simple property
     */
    private $locale;

    /**
     * @var string
     */
    private $answerFr;

    /**
     * @var string
     */
    private $answerNl;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\QuestionSurvey", inversedBy="answers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $questionSurvey;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\SurveyAnswer", mappedBy="answers")
     */
    private $surveyAnswers;

    /**
     * Answer constructor.
     */
    public function __construct()
    {
      $this->surveyAnswers = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
      return $this->id;
    }

    /**
     * @param $id
     * @return self
     */
    public function setId($id): self
    {
      $this->id = $id;

      return $this;
    }

    /**
     * @return string|null
     */
    public function getAnswer(): ?string
    {
      return $this->answer;
    }

    /**
     * @param string $answer
     * @return self
     */
    public function setAnswer(string $answer): self
    {
      $this->answer = $answer;

      return $this;
    }

    /**
     * @return int|null
     */
    public function getWeight(): ?int
    {
      return $this->weight;
    }

    /**
     * @param int $weight
     * @return self
     */
    public function setWeight(int $weight): self
    {
      $this->weight = $weight;

      return $this;
    }

    /**
     * @return \App\Entity\QuestionSurvey|null
     */
    public function getQuestionSurvey(): ?QuestionSurvey
    {
      return $this->questionSurvey;
    }

    /**
     * @param \App\Entity\QuestionSurvey|null $questionSurvey
     * @return \App\Entity\AnswerSurvey
     */
    public function setQuestionSurvey(?QuestionSurvey $questionSurvey): self
    {
      $this->questionSurvey = $questionSurvey;

      return $this;
    }

    /**
     * @return Collection|SurveyAnswer[]
     */
    public function getSurveyAnswers(): Collection
    {
      return $this->surveyAnswers;
    }

    /**
     * @param \App\Entity\SurveyAnswer $surveyAnswer
     * @return \App\Entity\AnswerSurvey
     */
    public function addSurveyAnswer(SurveyAnswer $surveyAnswer): self
    {
      if (!$this->surveyAnswers->contains($surveyAnswer)) {
        $this->surveyAnswers[] = $surveyAnswer;
        $surveyAnswer->addAnswer($this);
      }

      return $this;
    }

    /**
     * @param \App\Entity\SurveyAnswer $surveyAnswer
     * @return \App\Entity\AnswerSurvey
     */
    public function removeSurveyAnswer(SurveyAnswer $surveyAnswer): self
    {
      if ($this->surveyAnswers->contains($surveyAnswer)) {
        $this->surveyAnswers->removeElement($surveyAnswer);
        $surveyAnswer->removeAnswer($this);
      }

      return $this;
    }

  /**
     * @return \DateTimeInterface|null
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
      return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     * @return self
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
      $this->createdAt = $createdAt;

      return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
      return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     * @return self
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
      $this->updatedAt = $updatedAt;

      return $this;
    }

    /**
     * @param $locale
     */
    public function setTranslatableLocale($locale)
    {
      $this->locale = $locale;
    }

    // Virtual properties
    public function getAnswerFr(): ?string
    {
      return $this->answerFr ?? $this->answer;
    }

    public function setAnswerFr($answerFr): self
    {
      $this->answerFr = $answerFr;

      return $this;
    }

    public function getAnswerNl(): ?string
    {
      return $this->answerNl ?? $this->answer;
    }

    public function setAnswerNl($answerNl): self
    {
      $this->answerNl = $answerNl;

      return $this;
    }

}
