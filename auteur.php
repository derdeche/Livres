<?php

class auteur{

    private string $_nom;
    private string $_prenom;

    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

    public function getNom() :string
    {
        return $this->_nom;
    }

    public function setNom(string $nom)
    {
        $this->_nom = $nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->_prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
        return $this;
    }

    
    public function __tostring($nom,$prenom)
    {
        return "Livre de"." ". $this->_nom. " ". $this->_prenom."<br>";
    }





















}