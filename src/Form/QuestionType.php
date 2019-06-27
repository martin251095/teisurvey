<?php

namespace App\Form;

use App\Entity\Question;
use App\Entity\Category;
use Doctrine\ORM\EntityRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class QuestionType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('question', TextType::class, $this->getConfiguration('Statement', 'Statement of the question'))
          ->add(
            'questionFr',
            TextType::class,
            $this->getConfiguration('Statement FR', 'Statement of the question in French', ['required' => false])
          )
          ->add(
            'questionNl',
            TextType::class,
            $this->getConfiguration('Statement NL', 'Statement of the question in Dutch', ['required' => false])
          )
          ->add('point', NumberType::class, $this->getConfiguration('Point', 'Score of this question'))
          ->add('weight', NumberType::class, $this->getConfiguration('Weight', 'Weight of this question'))
          ->add(
            'category',
            EntityType::class,
            [
              'class' => Category::class,
              'query_builder' => function (EntityRepository $er) {
                  return $er->createQueryBuilder('c')
                    ->addOrderBy('c.root', 'ASC')
                    ->addOrderBy('c.lft', 'ASC');
              },
              'choice_label' => 'indentedName',
              'expanded' => false,
              'multiple' => false,
              'choice_attr' => function (Category $category, $key, $index) {
                  $name = $category->getName();
                  $name = strtolower($name);
                  $lvl = 'lvl_'.$category->getLvl();
                  $isParentLeaf = $category->isLeaf() ? '' : 'd-none';

                  return ['class' => $lvl.' '.$isParentLeaf.' '.$name];
              },
            ]
          )
          ->add(
            'longQuestion',
            CKEditorType::class,
            $this->getConfiguration(
              'Long statement',
              'Long statement of the question',
              ['required' => false]
            )
          )
          ->add(
            'longQuestionFr',
            CKEditorType::class,
            $this->getConfiguration(
              'Long statement FR',
              'Long statement of the question in French',
              ['required' => false]
            )
          )
          ->add(
            'longQuestionNl',
            CKEditorType::class,
            $this->getConfiguration(
              'Long statement NL',
              'Long statement of the question in Dutch',
              ['required' => false]
            )
          )
          ->add('multipleAnswers');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
          [
            'data_class' => Question::class,
          ]
        );
    }
}
