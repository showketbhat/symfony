<?php

namespace Showket\BhatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
    	return $this->render('ShowketBhatBundle:Register:register.html.twig');
    }

}


