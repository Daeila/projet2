<?php

namespace sil10\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('sil10VitrineBundle:Default:index.html.twig');
    }

    public function showNameAction($name){
        return $this->render('sil10VitrineBundle:Default:index.html.twig', array('name'=>$name));
    }
    
    //affiche les mentions du site
    public function showMentionAction(){
        return $this->render('sil10VitrineBundle:Default:mention.html.twig');
    }
    
    //affiche le catalogue
    public function showCatalogueAction(){
        $categories=$this->getDoctrine()->getManager()->getRepository('sil10VitrineBundle:Categorie')->findAll();
        return $this->render('sil10VitrineBundle:Default:catalogue.html.twig',  array('categories'=>$categories));
    }
    
    //affiche les articles par catégories
    public function showArticlesParCategorieAction($id){        
        $categorie=$this->getDoctrine()->getManager()->getRepository('sil10VitrineBundle:Categorie')->findOneById($id);
        $articles=$categorie->getArticles();
        return $this->render('sil10VitrineBundle:Default:articlesParCategorie.html.twig',  array('articles'=>$articles));
    }
    
}
