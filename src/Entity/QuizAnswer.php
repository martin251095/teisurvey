<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuizAnswerRepository")
 */
class QuizAnswer
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
     * @ORM\Column(type="string", length=255)
     */
    private $userEmail;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Quiz", inversedBy="quizAnswers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $quiz;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Question", inversedBy="quizAnswers")
     */
    private $questions;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Answer", inversedBy="quizAnswers")
     */
    private $answers;

    /**
     * @var int
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $score;

    /**
     * @var int
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $total;

  /**
   * QuizAnswer constructor.
   */
    public function __construct()
    {
        $this->questions = new ArrayCollection();
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
   * @param string|null $userFirstname
   * @return self
   */
    public function setUserFirstname(?string $userFirstname): self
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
   * @param string|null $userLastname
   * @return self
   */
    public function setUserLastname(?string $userLastname): self
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
   * @return \App\Entity\Quiz|null
   */
    public function getQuiz(): ?Quiz
    {
        return $this->quiz;
    }

  /**
   * @param \App\Entity\Quiz|null $quiz
   * @return \App\Entity\QuizAnswer
   */
    public function setQuiz(?Quiz $quiz): self
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * @return Collection|Question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

  /**
   * @param \App\Entity\Question $question
   * @return \App\Entity\QuizAnswer
   */
    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
        }

        return $this;
    }

  /**
   * @param \App\Entity\Question $question
   * @return \App\Entity\QuizAnswer
   */
    public function removeQuestion(Question $question): self
    {
        if ($this->questions->contains($question)) {
            $this->questions->removeElement($question);
        }

        return $this;
    }

    /**
     * @return Collection|Answer[]
     */
    public function getAnswers(): Collection
    {
        return $this->answers;
    }

  /**
   * @param \App\Entity\Answer $answer
   * @return \App\Entity\QuizAnswer
   */
    public function addAnswer(Answer $answer): self
    {
        if (!$this->answers->contains($answer)) {
            $this->answers[] = $answer;
        }

        return $this;
    }

  /**
   * @param \App\Entity\Answer $answer
   * @return \App\Entity\QuizAnswer
   */
    public function removeAnswer(Answer $answer): self
    {
        if ($this->answers->contains($answer)) {
            $this->answers->removeElement($answer);
        }

        return $this;
    }

  /**
   * @return float|null
   */
    public function getScore(): ?float
    {
        return $this->score;
    }

  /**
   * @param float $score
   * @return self
   */
    public function setScore(float $score): self
    {
        $this->score = $score;

        return $this;
    }

  /**
   * @return float|null
   */
    public function getTotal(): ?float
    {
        return $this->total;
    }

  /**
   * @param float $total
   * @return self
   */
    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }
}
