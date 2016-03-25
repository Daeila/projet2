<?php

namespace sil10\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//Cette action devra récupérer le contenu du panier stocké en session et le transmettre à une vue contenuPanier,
// ainsi que le montant total du panier après l’avoir calculé
class PanierController extends Controller{

    public function showContenuPanierAction(){
        $session = $this->getRequest()->getSession();
        $panier=$session->get('panier');
        $contenu=$panier->getContenu();
        $total=0;

        foreach ($contenu as $article => $value){
            $total=$total+($article->getPrix())*$value;
        }

        $session->set('prixPanier','total');

        return $this->render('sil10VitrineBundle:Default:contenuPanier.html.twig',array('panier'=>panier,
            'prixPanier'=>total));
    }


}