<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;

class CategoryTreeType extends ApplicationType
{

    private $em;
    private $repo;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repo = $this->em->getRepository(Category::class);
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('name', TextType::class, $this->getConfiguration('Name', 'Category Name'))
          ->add('nameFr', TextType::class, $this->getConfiguration('Name FR', 'Category Name in French', ['required' => false]))
          ->add('nameNl', TextType::class, $this->getConfiguration('Name NL', 'Category Name in Dutch', ['required' => false]))
          ->add(
            'parent',
            EntityType::class,
            [
              'label' => 'Parent Category',
              'required' => false,
              'class' => Category::class,
              'query_builder' => function (EntityRepository $er) {
                  return $er
                    ->createQueryBuilder('node')
                    ->addOrderBy('node.root', 'ASC')
                    ->addOrderBy('node.lft', 'ASC');
              },
              'expanded' => false,
              'multiple' => false,
              'choice_label' => function (Category $category) {

                  $prefix = str_repeat('-', $category->getLvl());

                  return $prefix.' '.$category->getName();
              },

            ]
          );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
          [
            'data_class' => Category::class,
          ]
        );
    }

}