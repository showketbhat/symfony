<?php

namespace Showket\BhatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Showket\BhatBundle\Form\EnquiryType;
use Showket\BhatBundle\Entity\Register;

class MyController extends Controller
{
    public function indexAction(){
	//echo "Hi I am Showket"; exit;
	return $this->render('ShowketBhatBundle:My:index.html.twig');
    }

     public function moviesAction(){
	//echo "Hi I am Showket"; exit;
	return $this->render('ShowketBhatBundle:My:movies.html.twig');
    }

     public function songAction(){
	//echo "Hi I am Showket"; exit;
	return $this->render('ShowketBhatBundle:My:song.html.twig');
    }
    
    public function registerAction(){
	//echo "Hi I am Showket"; exit;
	//return $this->render('ShowketBhatBundle:Register:register.html.twig');
	// src/Blogger/BlogBundle/Controller/PageController.php
	$register = new Register();
	$form = $this->createForm(new EnquiryType(), $register);
//	$form = $this->createForm(new EnquiryType());

	$request = $this->getRequest();
	if ($request->getMethod() == 'POST') {
	$form->bindRequest($request);

	if ($form->isValid()) {
	    // Perform some action, such as sending an email

	    // Redirect - This is important to prevent users re-posting
	    // the form if they refresh the page
	    return $this->redirect($this->generateUrl('ShowketBhatBundle_register'));
	}
	}

	return $this->render('ShowketBhatBundle:My:register.html.twig', array(
	'form' => $form->createView()
	));

	}

    

}


