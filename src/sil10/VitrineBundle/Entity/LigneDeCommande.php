<?php

namespace sil10\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneDeCommande
 */
class LigneDeCommande
{
    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var string
     */
    private $prix;

    /**
     * @var \sil10\VitrineBundle\Entity\Commande
     */
    private $commande;

    /**
     * @var \sil10\VitrineBundle\Entity\Article
     */
    private $article;


    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return LigneDeCommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return LigneDeCommande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set commande
     *
     * @param \sil10\VitrineBundle\Entity\Commande $commande
     * @return LigneDeCommande
     */
    public function setCommande(\sil10\VitrineBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \sil10\VitrineBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set article
     *
     * @param \sil10\VitrineBundle\Entity\Article $article
     * @return LigneDeCommande
     */
    public function setArticle(\sil10\VitrineBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \sil10\VitrineBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
