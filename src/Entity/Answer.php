<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Answer
 * @package App\Entity
 * @ORM\Table(name="answer")
 * @ORM\Entity(repositoryClass="App\Repository\AnswerRepository")
 * @Gedmo\TranslationEntity(class="App\Entity\Translation\AnswerTranslation")
 */
class Answer implements Translatable
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Question", inversedBy="answers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $isCorrect;

    /**
     * @var int
     * @Assert\NotBlank
     * @ORM\Column(type="float", scale=1)
     */
    private $point;

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
     * @ORM\ManyToMany(targetEntity="App\Entity\QuizAnswer", mappedBy="answers")
     */
    private $quizAnswers;

    /**
     * Answer constructor.
     */
    public function __construct()
    {
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
     * @return Question|null
     */
    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    /**
     * @param Question|null $question
     * @return self
     */
    public function setQuestion(?Question $question): self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsCorrect(): ?bool
    {
        return $this->isCorrect;
    }

    /**
     * @param bool $isCorrect
     * @return self
     */
    public function setIsCorrect(bool $isCorrect): self
    {
        $this->isCorrect = $isCorrect;

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
     * @return Collection|QuizAnswer[]
     */
    public function getQuizAnswers(): Collection
    {
      return $this->quizAnswers;
    }

    /**
     * @param \App\Entity\QuizAnswer $quizAnswer
     * @return \App\Entity\Answer
     */
    public function addQuizAnswer(QuizAnswer $quizAnswer): self
    {
      if (!$this->quizAnswers->contains($quizAnswer)) {
        $this->quizAnswers[] = $quizAnswer;
        $quizAnswer->addAnswer($this);
      }

      return $this;
    }

    /**
     * @param \App\Entity\QuizAnswer $quizAnswer
     * @return \App\Entity\Answer
     */
    public function removeQuizAnswer(QuizAnswer $quizAnswer): self
    {
      if ($this->quizAnswers->contains($quizAnswer)) {
        $this->quizAnswers->removeElement($quizAnswer);
        $quizAnswer->removeAnswer($this);
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
