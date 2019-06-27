<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Question
 * @package App\entity
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 * @Gedmo\TranslationEntity(class="App\Entity\Translation\QuestionTranslation")
 */
class Question implements Translatable
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
     * @ORM\OneToMany(targetEntity="App\Entity\Answer", mappedBy="question")
     * @ORM\OrderBy({"weight" = "ASC"})
     */
    private $answers;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="question")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @var int
     * @Assert\NotBlank
     * @ORM\Column(type="float", scale=1)
     */
    private $point;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(type="text", nullable=true)
     */
    private $longQuestion;

    /**
     * @ORM\Column(type="boolean")
     */
    private $multipleAnswers;

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
     * @ORM\ManyToMany(targetEntity="App\Entity\QuizAnswer", mappedBy="questions")
     */
    private $quizAnswers;

    /**
     * Question constructor.
     */
    public function __construct()
    {
        $this->answers = new ArrayCollection();
        $this->quizAnswers = new ArrayCollection();
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
     * @return Collection|Answer[]
     */
    public function getAnswers(): Collection
    {
        return $this->answers;
    }

    /**
     * @param Answer $answer
     * @return self
     */
    public function addAnswer(Answer $answer): self
    {
        if (!$this->answers->contains($answer)) {
            $this->answers[] = $answer;
            $answer->setQuestion($this);
        }

        return $this;
    }

    /**
     * @param Answer $answer
     * @return self
     */
    public function removeAnswer(Answer $answer): self
    {
        if ($this->answers->contains($answer)) {
            $this->answers->removeElement($answer);
            // set the owning side to null (unless already changed)
            if ($answer->getQuestion() === $this) {
                $answer->setQuestion(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|QuizAnswer[]
     */
    public function getQuizAnswers(): Collection
    {
      return $this->quizAnswers;
    }

    /**
     * @param \App\Entity\QuizAnswer $quizAnswer
     * @return \App\Entity\Question
     */
    public function addQuizAnswer(QuizAnswer $quizAnswer): self
    {
      if (!$this->quizAnswers->contains($quizAnswer)) {
        $this->quizAnswers[] = $quizAnswer;
        $quizAnswer->addQuestion($this);
      }

      return $this;
    }

    /**
     * @param \App\Entity\QuizAnswer $quizAnswer
     * @return \App\Entity\Question
     */
    public function removeQuizAnswer(QuizAnswer $quizAnswer): self
    {
      if ($this->quizAnswers->contains($quizAnswer)) {
        $this->quizAnswers->removeElement($quizAnswer);
        $quizAnswer->removeQuestion($this);
      }

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
     * @return string|null
     */
    public function getPoint(): ?string
    {
        return $this->point;
    }

    /**
     * @param string $point
     * @return self
     */
    public function setPoint(string $point): self
    {
        $this->point = $point;

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
     * @return bool|null
     */
    public function isMultipleAnswers(): ?bool
    {
        return $this->multipleAnswers;
    }

    /**
     * @param bool $multipleAnswers
     * @return self
     */
    public function setMultipleAnswers(bool $multipleAnswers): self
    {
        $this->multipleAnswers = $multipleAnswers;

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
