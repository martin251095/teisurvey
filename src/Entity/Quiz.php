<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Quiz
 * @package App\Entity
 * @ORM\Table(name="quiz")
 * @ORM\Entity(repositoryClass="App\Repository\QuizRepository")
 * @Gedmo\TranslationEntity(class="App\Entity\Translation\QuizTranslation")
 */
class Quiz
{
    /**
     * Translatable fields
     */
    const TRANSLATABLE = [
      'title',
      'description',
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
    private $title;

    /**
     * @var string
     * @Gedmo\Translatable
     * @Assert\NotBlank
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\QuizAnswer", mappedBy="quiz", orphanRemoval=true)
     */
    private $quizAnswers;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(type="string", length=255)
     */
    private $sendingEmail;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $sendingEmailLanguage;

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
    private $titleFr;

    /**
     * @var string
     */
    private $titleNl;

    /**
     * @var string
     */
    private $descriptionFr;

    /**
     * @var string
     */
    private $descriptionNl;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="quizzes")
     */
    private $categories;

  /**
   * Quiz constructor.
   */
    public function __construct()
    {
        $this->quizAnswers = new ArrayCollection();
        $this->slug = uniqid();
        $this->categories = new ArrayCollection();
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
    public function getTitle(): ?string
    {
        return $this->title;
    }

  /**
   * @param string $title
   * @return \App\Entity\Quiz
   */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \App\Entity\Quiz
     */
    public function setDescription(string $description): self
    {
      $this->description = $description;

      return $this;
    }

  /**
   * @return string|null
   */
    public function getSlug(): ?string
    {
        return $this->slug;
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
   * @return \App\Entity\Quiz
   */
    public function addQuizAnswer(QuizAnswer $quizAnswer): self
    {
        if (!$this->quizAnswers->contains($quizAnswer)) {
            $this->quizAnswers[] = $quizAnswer;
            $quizAnswer->setQuiz($this);
        }

        return $this;
    }

  /**
   * @param \App\Entity\QuizAnswer $quizAnswer
   * @return \App\Entity\Quiz
   */
    public function removeQuizAnswer(QuizAnswer $quizAnswer): self
    {
        if ($this->quizAnswers->contains($quizAnswer)) {
            $this->quizAnswers->removeElement($quizAnswer);
            // set the owning side to null (unless already changed)
            if ($quizAnswer->getQuiz() === $this) {
                $quizAnswer->setQuiz(null);
            }
        }

        return $this;
    }

  /**
   * @return string|null
   */
    public function getSendingEmail(): ?string
    {
        return $this->sendingEmail;
    }

  /**
   * @param string $sendingEmail
   * @return \App\Entity\Quiz
   */
    public function setSendingEmail(string $sendingEmail): self
    {
        $this->sendingEmail = $sendingEmail;

        return $this;
    }

  /**
   * @return string|null
   */
    public function getSendingEmailLanguage(): ?string
    {
        return $this->sendingEmailLanguage;
    }

  /**
   * @param string $sendingEmailLanguage
   * @return \App\Entity\Quiz
   */
    public function setSendingEmailLanguage(string $sendingEmailLanguage): self
    {
        $this->sendingEmailLanguage = $sendingEmailLanguage;

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

    /**
     * @return string
     */
    public function __toString()
    {
      return $this->getName();
    }

    // Virtual properties
    public function getTitleFr(): ?string
    {
      return $this->titleFr ?? $this->title;
    }

    public function setTitleFr($titleFr): self
    {
      $this->titleFr = $titleFr;

      return $this;
    }

    public function getTitleNl(): ?string
    {
      return $this->titleNl ?? $this->title;
    }

    public function setTitleNl($titleNl): self
    {
      $this->titleNl = $titleNl;

      return $this;
    }

    public function getDescriptionFr(): ?string
    {
      return $this->descriptionFr ?? $this->description;
    }

    public function setDescriptionFr($descriptionFr): self
    {
      $this->descriptionFr = $descriptionFr;

      return $this;
    }

    public function getDescriptionNl(): ?string
    {
      return $this->descriptionNl ?? $this->description;
    }

    public function setDescriptionNl($descriptionNl): self
    {
      $this->descriptionNl = $descriptionNl;

      return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
      if ($this->category->contains($category)) {
        $this->category->removeElement($category);
        $category->removeCategory($this);
      }

      return $this;
    }
}
