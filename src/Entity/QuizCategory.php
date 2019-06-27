<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class QuizCategory
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="quiz_category")
 */
class QuizCategory
{
  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @var int
   * @ORM\Column(type="integer")
   */
  private $weight;

  /**
   * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="quizzes")
   * @ORM\JoinColumn(nullable=false)
   */
  private $category;

  /**
   * @ORM\ManyToOne(targetEntity="App\Entity\Quiz", inversedBy="categories")
   * @ORM\JoinColumn(nullable=false)
   */
  private $quiz;

  /**
   * @return int|null
   */
  public function getId(): ?int
  {
    return $this->id;
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
   * @return Category|null
   */
  public function getCategory(): ?Category
  {
    return $this->category;
  }

  /**
   * @param Category|null $category
   * @return self
   */
  public function setCategory(?Category $category): self
  {
    $this->category = $category;

    return $this;
  }

  /**
   * @return Quiz|null
   */
  public function getQuiz(): ?Quiz
  {
    return $this->quiz;
  }

  /**
   * @param Quiz|null $quiz
   * @return self
   */
  public function setQuiz(?Quiz $quiz): self
  {
    $this->quiz = $quiz;

    return $this;
  }
}
