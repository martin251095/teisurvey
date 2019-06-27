<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class QuestionSurvey
 * @package App\entity
 * @ORM\Table(name="question_survey")
 * @ORM\Entity(repositoryClass="App\Repository\QuestionSurveyRepository")
 * @Gedmo\TranslationEntity(class="App\Entity\Translation\QuestionSurveyTranslation")
 */
class QuestionSurvey implements Translatable
{
  /**
   * Translatable fields
   */
  const TRANSLATABLE = [
    'question',
    'longQuestion',
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
  private $question;

  /**
   * @var string
   * @Gedmo\Translatable
   * @ORM\Column(type="text", nullable=true)
   */
  private $longQuestion;

  /**
   * @ORM\ManyToMany(targetEntity="App\Entity\SurveyAnswer", mappedBy="questionSurveys")
   */
  private $surveyAnswers;

  /**
   * @ORM\ManyToOne(targetEntity="App\Entity\Survey", inversedBy="questionSurveys")
   */
  private $survey;

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
  private $questionFr;

  /**
   * @var string
   */
  private $questionNl;

  /**
   * @var string
   */
  private $longQuestionFr;

  /**
   * @var string
   */
  private $longQuestionNl;

  /**
   * @ORM\OneToMany(targetEntity="App\Entity\AnswerSurvey", mappedBy="questionSurvey", orphanRemoval=true)
   */
  private $answers;

  /**
   * Question constructor.
   */
  public function __construct()
  {
    $this->surveyAnswers = new ArrayCollection();
    $this->answers = new ArrayCollection();
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
  public function getQuestion(): ?string
  {
    return $this->question;
  }

  /**
   * @param string $question
   * @return self
   */
  public function setQuestion(string $question): self
  {
    $this->question = $question;

    return $this;
  }

  /**
   * @return string|null
   */
  public function getLongQuestion(): ?string
  {
    return $this->longQuestion;
  }

  /**
   * @param string|null $longQuestion
   * @return self
   */
  public function setLongQuestion(?string $longQuestion): self
  {
    $this->longQuestion = $longQuestion;

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
   * @param SurveyAnswer $surveyAnswer
   * @return self
   */
  public function addSurveyAnswer(SurveyAnswer $surveyAnswer): self
  {
    if (!$this->surveyAnswers->contains($surveyAnswer)) {
      $this->surveyAnswers[] = $surveyAnswer;
      $surveyAnswer->addQuestion($this);
    }

    return $this;
  }

  /**
   * @param SurveyAnswer $surveyAnswer
   * @return self
   */
  public function removeSurveyAnswer(SurveyAnswer $surveyAnswer): self
  {
    if ($this->surveyAnswers->contains($surveyAnswer)) {
      $this->surveyAnswers->removeElement($surveyAnswer);
      $surveyAnswer->removeQuestion($this);
    }

    return $this;
  }

  /**
   * @return \App\Entity\Survey|null
   */
  public function getSurvey(): ?Survey
  {
    return $this->survey;
  }

  /**
   * @param \App\Entity\Survey|null $survey
   *
   * @return \App\Entity\QuestionSurvey
   */
  public function setSurvey(?Survey $survey): self
  {
    $this->survey = $survey;

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
   * @return Collection|AnswerSurvey[]
   */
  public function getAnswers(): Collection
  {
    return $this->answers;
  }

  /**
   * @param \App\Entity\AnswerSurvey $answer
   * @return \App\Entity\QuestionSurvey
   */
  public function addAnswer(AnswerSurvey $answer): self
  {
    if (!$this->answers->contains($answer)) {
      $this->answers[] = $answer;
      $answer->setQuestionSurvey($this);
    }

    return $this;
  }

  /**
   * @param \App\Entity\AnswerSurvey $answer
   * @return \App\Entity\QuestionSurvey
   */
  public function removeAnswer(AnswerSurvey $answer): self
  {
    if ($this->answers->contains($answer)) {
      $this->answers->removeElement($answer);
      // set the owning side to null (unless already changed)
      if ($answer->getQuestionSurvey() === $this) {
        $answer->setQuestionSurvey(null);
      }
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
  public function getQuestionFr(): ?string
  {
    return $this->questionFr ?? $this->question;
  }

  public function setQuestionFr($questionFr): self
  {
    $this->questionFr = $questionFr;

    return $this;
  }

  public function getQuestionNl(): ?string
  {
    return $this->questionNl ?? $this->question;
  }

  public function setQuestionNl($questionNl): self
  {
    $this->questionNl = $questionNl;

    return $this;
  }

  public function getLongQuestionFr(): ?string
  {
    return $this->longQuestionFr ?? $this->longQuestion;
  }

  public function setLongQuestionFr($longQuestionFr): self
  {
    $this->longQuestionFr = $longQuestionFr;

    return $this;
  }

  public function getLongQuestionNl(): ?string
  {
    return $this->longQuestionNl ?? $this->longQuestion;
  }

  public function setLongQuestionNl($longQuestionNl): self
  {
    $this->longQuestionNl = $longQuestionNl;

    return $this;
  }

}
