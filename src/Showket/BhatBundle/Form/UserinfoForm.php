<?php
// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace Showket\BhatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class UserinfoForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name', 'text', array('label'  => 'Full Name',));
		$builder->add('username');
		$builder->add('password', 'password', array('label'  => 'Password',));
    }

    public function getName()
    {
        return 'userinfo';
	// This method returns the value for forms input type text name = register[fieldname] (Showket Bhat)
    }
}
