<?php

namespace Stcw\StudentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('language', 'choice',array(
            'choices' => array(
                'fr'=>'French',
                'nl'=>'Dutch',
                'en'=>'English',
                'de'=>'German',
            )));
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Stcw\StudentBundle\Entity\Profile'
        );
    }
}