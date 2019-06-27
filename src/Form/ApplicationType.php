<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;

class ApplicationType extends AbstractType
{
    /**
     * Allows you to have the basic configuration of a field
     *
     * @param string $label
     * @param string $placeholder
     * @param string $options
     * @return array
     */
    public function getConfiguration($label, $placeholder, $options = [])
    {
        return array_merge_recursive(
          [
            'label' => $label,
            'attr' => [
              'placeholder' => $placeholder,
            ],
          ],
          $options
        );
    }
}

