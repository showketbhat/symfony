<?php
// src/Blogger/BlogBundle/Entity/Enquiry.php

namespace Showket\BhatBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\MaxLength;





class Register
{
    protected $f_name;
    protected $l_name;
    protected $age;
    protected $sex;
    protected $location;
    protected $email;

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
       // $metadata->addPropertyConstraint('f_name', new NotBlank());
       
    	$metadata->addPropertyConstraint('f_name', new MaxLength(7));
    	$metadata->addPropertyConstraint('l_name', new MinLength(10));
        $metadata->addPropertyConstraint('email', new Email(array(
	    'message' => 'I do not like invalid emails. Please provide a real one!'
	)));
		//$metadata->addPropertyConstraint('email', new NotBlank());
/*
        $metadata->addPropertyConstraint('subject', new NotBlank());
        

        $metadata->addPropertyConstraint('body', new MinLength(10));
  */
      }
  

    public function getFname()
    {
    	
        return $this->f_name;
    }

    public function setFName($f_name)
    {
        $this->name = $f_name;
    }

    public function getLname()
    {
        return $this->l_name;
    }

    public function setLName($l_name)
    {
        $this->name = $l_name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->name = $age;
    }  

    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex)
    {
        $this->name = $sex;
    }


   public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->name = $location;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

   
}

