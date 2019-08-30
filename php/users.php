<?php
require_once"./connexion.php";
class User{
    //les attributs
   public $id; 
   public $nom;
   public $prenom;
   public $email;
   public $password;
   public $age;
   public $gender;
   

//les methodes
   public function inscrption(){
    $base=connexion::connect();
    $req="insert into users values (null,'$this->nom','$this->prenom','$this->age','$this->email','$this->password','$this->age','$this->gender',)";//exec fonction te5dem aal les req select update et delete qui return soit int ou boolean false
    $res=$base->exec($req);
    if($res==1){
        header('location:./../html/connexion.html');
    }else{
        echo"Error inscris";
    }
}
   
}

?>