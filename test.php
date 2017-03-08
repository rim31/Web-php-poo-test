<?php

require "perso.php";

$merlin = new Perso("merlin");
$merlin->nom = 'Merlin';

// on affiche l'obejt
var_dump($merlin);

//on affiche la variable :
var_dump($merlin->vie);

//on affiche la méthode :
$merlin->crier();

//on lui applique une methode/fonction :
$merlin->regenerer(5);
var_dump($merlin->vie);

//on instancie un nouvel objet
$harry = new Perso("harry");
$harry->nom = 'Harry';
$merlin->regenerer();

var_dump ($harry);
echo "============on attaque==============";
$merlin->attaque($harry);
var_dump($harry->vie);


echo "============mort=============";
//nouveau test avec les noms dans l'instanciation
$merlin = new Perso("merlin");
var_dump($merlin);
// ca marche pas, pour le nommer, il faut faire appel à un constructeur
$harry->vie = 20;
var_dump($harry->mort());

echo "============on attaque==============";
$merlin->attaque($harry);
var_dump($harry->vie);
var_dump($harry->mort());
