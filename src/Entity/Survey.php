<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Survey
 * @package App\Entity
 * @ORM\Table(name="survey")
 * @ORM\Entity(repositoryClass="App\Repository\SurveyRepository")
 * @Gedmo\TranslationEntity(class="App\Entity\Translation\SurveyTranslation")
 */
class Survey implements Translatable
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
     * @ORM\OneToMany(targetEntity="App\Entity\SurveyAnswer", mappedBy="survey")
     */
    private $surveyAnswers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Question", mappedBy="survey")
     */
    private $questionSurveys;

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
     * Survey constructor.
     */
    public function __construct()
    {
        $this->slug = uniqid();
        $this->surveyAnswers = new ArrayCollection();
        $this->questionSurveys = new ArrayCollection();
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
     * @return self
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
     * @return \App\Entity\Survey
     */
    public function setDescription(string $description): self
    {
      $this->description = $description;

      return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
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
            $surveyAnswer->setSurvey($this);
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
            // set the owning side to null (unless already changed)
            if ($surveyAnswer->getSurvey() === $this) {
                $surveyAnswer->setSurvey(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|QuestionSurvey[]
     */
    public function getQuestionSurveys(): Collection
    {
      return $this->questionSurveys;
    }

    /**
     * @param \App\Entity\QuestionSurvey $questionSurveys
     *
     * @return \App\Entity\Survey
     */
    public function addQuestionSurvey(QuestionSurvey $questionSurveys): self
    {
      if (!$this->questionSurveys->contains($questionSurveys)) {
        $this->questionSurveys[] = $questionSurveys;
        $questionSurveys->setSurvey($this);
      }

      return $this;
    }

    /**
     * @param \App\Entity\QuestionSurvey $questionSurveys
     *
     * @return \App\Entity\Survey
     */
    public function removeQuestionSurvey(QuestionSurvey $questionSurveys): self
    {
      if ($this->questionSurveys->contains($questionSurveys)) {
        $this->questionSurveys->removeElement($questionSurveys);
        // set the owning side to null (unless already changed)
        if ($questionSurveys->getSurvey() === $this) {
          $questionSurveys->setSurvey(null);
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

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getTitle();
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

}
