<?php
//on instancie un nouvel objet
require "combattant.php";
$john = new Combattant("john");
$john->nom = 'Snow';
var_dump($john);

//on instancie un nouvel objet
$daryl = new Combattant("daryl");
$daryl->nom = 'Daryl';
var_dump ($daryl);

echo "============on attaque==============\n";
$john->POING($daryl);
$daryl->pointDeVie();
$daryl->PIED($john);
$john->pointDeVie();

echo "============on attaque==============\n";
$john->PIED($daryl);
$john->pointDeVie();
var_dump($daryl->vie);

echo "============mort=============\n";
//nouveau test avec les noms dans l'instanciation
$john = new Combattant("john");
var_dump($john);
$john->vie = 0;
