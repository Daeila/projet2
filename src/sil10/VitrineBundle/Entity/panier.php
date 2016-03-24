<?php

namespace sil10\VitrineBundle\Entity;

class Panier {
    
    private $contenu;
    //Tableau - contenu[i] = quantite d'article d’id=i dans le panier)
    
    public function __construct() {
    // initialise le contenu
        $this->$contenu=[];
    }
    
    // ajoute l'article $articleId au contenu, en quantité $qte
    // (vérifier si l'article n'y est pas déjà)
    public function ajoutArticle ($articleId, $qte=1) {
        foreach ($contenu as $article => $value) {
            if($article->getId()==$articleId){
                
                
            }
        }

    }
    public function supprimeArticle($articleId) {
        unset($contenu[$articleId]);            
    }
    
    public function viderPanier() {
        foreach ($contenu as $article => $value) {
            unset($contenu[$article]);
        }   
    }
    
    function getContenu() {
        return $this->contenu;
    }


}
