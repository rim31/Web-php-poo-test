<?php
//on créé une classe en utilisant le mot 'class' puis le Nom et {}
class Combattant{
  //propriété : il s'agit des variables
  public $vie;
  public $nom;
  //on fait appel à un constructeur pour nommer un objet(par defaut)
  // il fait des opérations initales et rend le code plus propre
  public function __construct($nom){
    $this->nom = $nom;
	$this->vie = 10;
  }

  public function pointDeVie() {
	echo ($this->nom.' possede '.$this->vie.' points de Vie'."\n");
    if ($this->vie <= 0) {
      echo ($this->nom.' est mort '."\n");
    }
    else {
      echo ($this->nom.' est vivant '."\n");
    }
  }

  public function POING($cible) {
    // var_dump($cible);
    $cible->vie -= 1;
	echo ($cible->nom." perd  1 point de vie \n");
  }
  public function PIED($cible) {
    // var_dump($cible);
    $cible->vie -= 2;
	echo ($cible->nom." perd  2 point de vie \n");
  }
}
