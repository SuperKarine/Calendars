<?php

class Users
{
    private $nom;
    private $prenom;
    private $role;

    //fonctions
    public function consulterCalendars() 
    {
        return "{$this->prenom} choisit ton calendrier";
    
    }
    public function choisirTheme()
    {
        return "{$this->prenom} {$this->nom} choisit ton thème";
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }


    //afficher les valeurs

    public function afficheNom()
    {
    var_dump($this->getNom());
    }

    public function affichePrenom()
    {
    var_dump($this->getPrenom());
    }

}

// Je crée mon objet Users et j'affiche la propriété
$user = new Users();
var_dump($user->nom);


//appel des méthodes

var_dump($user->consulterCalendars());
var_dump($user->choisirTheme());


?>