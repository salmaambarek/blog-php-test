<?php
require_once"./users.php"
$action =$_GET['action'];
switch($action){
    case 'inscription':
    //recuperation des donnes
$personne = new User();
$personne->nom=$_GET['nom'];
$personne->prenom=$_GET['prenom'];
$personne->age=$_GET['age'];
$personne->id=$_GET['id'];
$personne->email=$_GET['email'];
$personne->password=$_GET['password'];
$personne->gender=$_GET['gender'];
$user->inscrption();

    break;
    case'connexion':
    break;
}

?>