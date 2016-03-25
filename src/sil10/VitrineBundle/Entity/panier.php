<?php

namespace sil10\VitrineBundle\Entity;

class Panier {
    
    private $contenu;
    //Tableau - contenu[i] = quantite d'article d’id=i dans le panier)

    public function __construct($contenu){
        $this->contenu = $contenu;
    }

    
    // ajoute l'article $articleId au contenu, en quantité $qte
    // (vérifier si l'article n'y est pas déjà)

    // $contenu est un tableau avec pour indice un article et comme valeur la quantité de cet article, $qte=1 car
    // on ajoute un article à la fois
    public function ajoutArticle ($articleId, $qte=1) {

        foreach ($this->contenu as $article => $value) {
            if($article->getId()==$articleId){
                $this->contenu[$articleId]=$value+$qte;
            }
            else{
                $this->contenu[$articleId]=$qte;
            }
        }
    }

    public function supprimeArticle($articleId) {
        unset($this->contenu[$articleId]);
    }
    
    public function viderPanier() {
        foreach ($this->contenu as $article) {
            unset($this->contenu[$article]);
        }   
    }
    
    function getContenu() {
        return $this->contenu;
    }


}
