<?php

class livre
{
    private string $_titre;
    private int $_nbpages;
    private int $_annparution;
    private int $_prix;
    private Auteur $_auteur;

    public function __construct(string $titre, int $nbpages, int $annparution, int $prix, Auteur $auteur)
    {
        $this->_titre = $titre;
        $this->_nbpages = $nbpages;
        $this->_annparution = $annparution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->addlivre($this);
    }

    public function getTitre()
    { 
        return $this->_titre;
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
        return $this;
    }

    public function getNbpages()
    {    
        return $this->_nbpages;
    }

    public function setNbpages($nbpages)
    {
        $this->_nbpages = $nbpages;
        return $this;
    }
    
    public function  getAnnparution()
    {
        return $this->_annparution;
    }

    public function setAnnparution($annparution)
    {
        $this->_annparution = $annparution;
        return $this;
    }

    public function getPrix()
    {
        return $this->_prix;
    }

    public function setPrix($prix)
    {
        $this->_prix = $prix;
        return $this;
    }

    public function getAuteur()
    {
        return $this->_auteur;
    }

    public function setAuteur($auteur)
    {
        $this->_prix = $auteur;
        return $this;
    }

    
    public function __toString()
   
    {        
        return $this->getTitre(). " ". "(".$this->getAnnparution().") : ". $this->getNbpages()." "."/". $this->getPrix()." "."€"."<br>";
    }
    
    
}

