<?php

namespace sil10\VitrineBundle\Controller;

use sil10\VitrineBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//Cette action devra récupérer le contenu du panier stocké en session et le transmettre à une vue contenuPanier,
// ainsi que le montant total du panier après l’avoir calculé
class PanierController extends Controller{

    public function showContenuPanierAction(){
        $total=0;
        $articles=array();
        $session = $this->getRequest()->getSession();
        $panier=$session->get('panier');
        if(!empty($panier)){
            foreach ($panier->getContenu() as $idArticle => $value){
                //Récupérer l'article par son id->$a a est l'Article récupéré
                //$article[$a]=$value ou value est la quantité
                $article=$this->getDoctrine()->getManager()->getRepository('sil10VitrineBundle:Article')->findOneById($idArticle);

                //TODO ne fonctionne pas
                $articles[$article]=$value;

                $total=$total+(intval($article->getPrix()))*$value;
            }
        }

        $session->set('prixPanier',$total);
        $session->set('panier',$panier);

        return $this->render('sil10VitrineBundle:Default:contenuPanier.html.twig',array('contenuPanier'=>$articles,'prixPanier'=>$total));
    }
    
    public function ajouteArticleAction($idArticle){
        //TODO penser à enlever du stock les articles
        $session = $this->getRequest()->getSession();
        $panier=$session->get('panier');

        //Si le panier n’existe pas le crée
        if(empty($panier)){
            $panier=new Panier();
        }
        $panier->ajoutArticle($idArticle,1);

        $session->set('panier',$panier);

        return $this->redirectToRoute('_contenuPanier');
        //return $this->render('sil10VitrineBundle:Default:contenuPanier.html.twig',array
        //('contenuPanier'=>$panier->getContenu()));
        
    }

    public function viderPanierAction(){
        $session = $this->getRequest()->getSession();
        $panier=$session->get('panier');

        if(!empty($panier)){
            $panier->viderPanier();
            $session->set('panier',$panier);
        }

        return $this->redirectToRoute('_contenuPanier');
    }
}