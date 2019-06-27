<?php

namespace App\Entity\Translation;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Entity\MappedSuperclass\AbstractTranslation;

/**
 * @ORM\Table(name="answer_survey_translations", indexes={
 *    @ORM\Index(name="answersurveytranslations_IDX", columns={"locale", "object_class", "field", "foreign_key"})
 * })
 * @ORM\Entity(repositoryClass="Gedmo\Translatable\Entity\Repository\TranslationRepository")
 */
class AnswerSurveyTranslation extends AbstractTranslation
{
  /**
   * All required columns are mapped through inherited superclass
   */
}
