<?php

namespace olivier\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction()
    {
        $id = 5;
         $url = $this->generateUrl('olivierblog_voir', array('id'=>$id));
        return $this->redirect($url);
        return $this->render('olivierBlogBundle:Blog:index.html.twig',
        array('nom' => 'olivier'));
        //return new Response("Hello worldeeee!");
        
        
    }
    
    public function ajouterAction()
    {
        return $this->render('olivierBlogBundle:Blog:ajout.html.twig',
        array('nom' => 'olivier'));
        //return new Response("Hello worldeeee!");
    }
    
    public function voirAction($id) {
        
        return new Response("Affichage de l'article d'id : ". $id);
    }
}
