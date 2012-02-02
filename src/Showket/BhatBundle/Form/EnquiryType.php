<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace Showket\BhatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('f_name', 'text', array('label'  => 'First Name',));
	$builder->add('l_name', 'text', array('label'  => 'Last Name',));
	$builder->add('age');
	$builder->add('sex');
	$builder->add('location');
        $builder->add('email', 'email');
      
    }

    public function getName()
    {
        return 'register';
	// This method returns the value for forms input type text name = register[fieldname]
    }
}
