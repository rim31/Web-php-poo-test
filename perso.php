<?php

//on créé une classe en utilisant le mot 'class' puis le Nom et {}
class Perso{

  //propriété : il s'agit des variables : on y met la val associée
  public $vie = 80;
  public $atk = 20;
  //il vaut mieux laisser une propriété d'un objet dans la séfinir pour la compréhension du code
  public $nom;

  //on fait appel à un constructeur pour nommer un objet(par defaut)
  // il fait des opérations initales et rend le code plus propre
  public function __construct($nom){
    $this->nom = $nom;
  }

  //methode : fonction
  public function crier(){
    echo 'HADOKEN';
  }

//$this : l'instance en cours
  public function regenerer($up = null){
    if (is_null($up)){
      $this->vie = 100;
    }
    else {
      $this->vie += $up;
    }
  }

  //
  public function mort() {
    // return $this->vie <= 0;
    if ($this->vie <= 0) {
      echo ($this->nom.' est mort');
    }
    else {
      echo ($this->nom.' est vivant');

    }
  }

  public function attaque($cible) {
    var_dump($cible);
    return $cible->vie -= $this->atk;
  }

}
