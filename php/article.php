<?php
require_once"./connexion.php";
class User{
    //les attributs
   public $id; 
   public $nom;
   public $description;
   public $image;
  

//les methodes
   public function add(){
    $base=connexion::connect();
    $req="insert into article values (null,'$this->nom','$this->description','$this->image',)";//exec fonction te5dem aal les req select update et delete qui return soit int ou boolean false
    $res=$base->exec($req);
    if($res==1){
        header('location:./../html/projet.html');
    }else{
        echo"Error ajout";
    }
}
   
}

?>