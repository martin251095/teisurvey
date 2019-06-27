<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\QuizCategory;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuizCategoryEmbeddedForm extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
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
          'choice_attr' => function (Category $category, $key, $index) {
            $name = $category->getName();
            $name = strtolower($name);
            $lvl = 'lvl_'.$category->getLvl();
            $isParentLeaf = $category->isLeaf() ? '' : 'd-none';

            return ['class' => $lvl.' '.$isParentLeaf.' '.$name];
          },
        ]
      )
      ->add('weight');
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(
      [
        'data_class' => QuizCategory::class,
      ]
    );
  }
}
