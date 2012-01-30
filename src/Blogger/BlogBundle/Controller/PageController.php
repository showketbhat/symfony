<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction(){
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }

//My Second function for about us page.

     public function aboutAction(){
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }
	
//My Third function for Contact page.
    public function contactAction(){
        return $this->render('BloggerBlogBundle:Page:contact.html.twig');
    }
}


