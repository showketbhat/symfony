<?php

namespace Showket\BhatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Showket\BhatBundle\Entity\User_Info;
use Showket\BhatBundle\Form\UserinfoForm;

class UserinfoController extends Controller{

 public function indexAction(){
	//echo "Hi I am Showket"; exit;
	//return $this->render('ShowketBhatBundle:My:index.html.twig');
    }

 public function infoAction(){
	//echo "This Is Showket And U are watching this from Userinfo Controller and info Action"; exit;
//	return $this->render('ShowketBhatBundle:My:index.html.twig');

	$em = $this->getDoctrine()->getEntityManager();

        $info = $em->getRepository('ShowketBhatBundle:User_Info')->findAll();
        if (!$info) {
		
         //   throw $this->createNotFoundException('Userinfo Table Is Empty. Please put some data in userinfo Table');
        }

        return $this->render('ShowketBhatBundle:My:userinfo.html.twig', array(
            'info'      => $info,
        ));
    }


  public function registerAction(){
	$register = new User_Info();
	$form = $this->createForm(new UserinfoForm(), $register);
	$request = $this->getRequest();
	if ($request->getMethod() == 'POST') {
	$form->bindRequest($request);

	if ($form->isValid()) {

	    $em = $this->getDoctrine()
                       ->getEntityManager();
            $em->persist($register);
            $em->flush();

           return $this->redirect($this->generateUrl('ShowketBhatBundle_information'));
        }


		//echo "yes"; exit;
	    // Perform some action, such as sending an email

	    // Redirect - This is important to prevent users re-posting
	    // the form if they refresh the page
	//    return $this->redirect($this->generateUrl('ShowketBhatBundle_information'));
//	}
	}
	//echo "NO";
	 return $this->render('ShowketBhatBundle:My:userinfoform.html.twig', array(
	'form' => $form->createView()
	));

	}

}
