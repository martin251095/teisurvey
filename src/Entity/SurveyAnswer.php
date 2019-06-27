<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class SurveyAnswer
 * @package App\Entity
 * @ORM\Table(name="survey_answer")
 * @ORM\Entity(repositoryClass="App\Repository\SurveyAnswerRepository")
 */
class SurveyAnswer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $userFirstname;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $userLastname;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $userEmail;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Survey", inversedBy="surveyAnswers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $survey;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\QuestionSurvey", inversedBy="surveyAnswers")
     */
    private $questionSurveys;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\AnswerSurvey", inversedBy="surveyAnswers")
     */
    private $answers;

    /**
     * SurveyAnswer constructor.
     */
    public function __construct()
    {
        $this->questionSurveys = new ArrayCollection();
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
     * @return string|null
     */
    public function getUserFirstname(): ?string
    {
        return $this->userFirstname;
    }

    /**
     * @param string $userFirstname
     * @return self
     */
    public function setUserFirstname(string $userFirstname): self
    {
        $this->userFirstname = $userFirstname;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserLastname(): ?string
    {
        return $this->userLastname;
    }

    /**
     * @param string $userLastname
     * @return self
     */
    public function setUserLastname(string $userLastname): self
    {
        $this->userLastname = $userLastname;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    /**
     * @param string $userEmail
     * @return self
     */
    public function setUserEmail(string $userEmail): self
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * @return Survey|null
     */
    public function getSurvey(): ?Survey
    {
        return $this->survey;
    }

    /**
     * @param Survey|null $survey
     * @return self
     */
    public function setSurvey(?Survey $survey): self
    {
        $this->survey = $survey;

        return $this;
    }

    /**
     * @return Collection|QuestionSurvey[]
     */
    public function getQuestions(): Collection
    {
        return $this->questionSurveys;
    }

    /**
     * @param QuestionSurvey $questionSurvey
     * @return self
     */
    public function addQuestion(QuestionSurvey $questionSurvey): self
    {
        if (!$this->questionSurveys->contains($questionSurvey)) {
            $this->questionSurveys[] = $questionSurvey;
        }

        return $this;
    }

    /**
     * @param QuestionSurvey $questionSurvey
     * @return self
     */
    public function removeQuestion(QuestionSurvey $questionSurvey): self
    {
        if ($this->questionSurveys->contains($questionSurvey)) {
            $this->questionSurveys->removeElement($questionSurvey);
        }

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
   * @return \App\Entity\SurveyAnswer
   */
    public function addAnswer(AnswerSurvey $answer): self
    {
        if (!$this->answers->contains($answer)) {
            $this->answers[] = $answer;
        }

        return $this;
    }

  /**
   * @param \App\Entity\AnswerSurvey $answer
   * @return \App\Entity\SurveyAnswer
   */
    public function removeAnswer(AnswerSurvey $answer): self
    {
        if ($this->answers->contains($answer)) {
            $this->answers->removeElement($answer);
        }

        return $this;
    }

}
