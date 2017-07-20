<?php
//on créé une classe en utilisant le mot 'class' puis le Nom et {}
class Combattant{
  //propriété : il s'agit des variables
  public $vie;
  public $nom;
  static public $activationSort = 1;
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
    $cible->vie -= 1 * Combattant::$activationSort;
	$degat = Combattant::$activationSort * 1;
	echo ($cible->nom.' perd  '.$degat." point de vie \n");
	if (Combattant::$activationSort == 3)
	{
		echo "degat triple \n";
	  Combattant::$activationSort = 1;
  	}
  }
  public function PIED($cible) {
    // var_dump($cible);
    $cible->vie -= 2 * Combattant::$activationSort;
	$degat = Combattant::$activationSort * 2;
	echo ($cible->nom.' perd  '.$degat." point de vie \n");
	if (Combattant::$activationSort == 3)
	{
		echo "degat triple \n";
	  Combattant::$activationSort = 1;
  	}
  }
}

  /**
   * classe qui herite de Combattant
   */
  class Ninja extends Combattant
  {
	  public function katana($cible) {
		//   var_dump($cible);
		  echo ($cible->nom.' perd 5 point de vie | katana slash '."\n");
		  $cible->vie -= 5;
	  }
  }

  /**
   * classe Zombie qui herite de Combattant
   */
  class Zombie extends Combattant
  {
	  public function sort($cible) {
		  if (Combattant::$activationSort == 1 && $this->vie > 0)
		  {
			   Combattant::$activationSort = 3;
			   echo ($cible->nom.' va subir un degat triple '."\n");
		  }
		  return $cible->activationSort;
	  }
  }
