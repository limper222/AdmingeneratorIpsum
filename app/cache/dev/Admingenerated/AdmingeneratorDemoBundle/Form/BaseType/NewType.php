<?php

namespace Admingenerated\AdmingeneratorDemoBundle\Form\BaseType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class NewType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
         $builder
            ->add('title', 'text', array())
            ->add('is_published', 'checkbox', array(  'required' => false,));
    }

    public function getName()
    {
        return 'new_movie';
    }
}
