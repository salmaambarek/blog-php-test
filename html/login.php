<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>blog</title>
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
</head>

<body>
    <header class="topbar">
        <nav>
            <div class="alignement">
                <a href="acceuil.html">Acceuil</a>
                <a href="article.html" class="active">Article</a>
                <a href="à propos.html">à propos</a>
                <a href="contact.html">Contact</a>
            </div>
            
        </nav>
        
    </header>
   

    <section>
        <article class="login-form">
    
        <form   name="cnx" method="POST" action="">
               
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" class="form-control" >
                
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" class="form-control" >  </br>
        
           
                    <input type="submit" value="Login" class="btn btn-info px-5" >
            
            </form>
            
        </article>

    </section>
    <aside>
        
        </aside>
   


  
            <div class="footer">
                    <div class="inner-footer">
                <div class="footer-items">
                    <h3>Computers &codes</h3>
                    <p>Azza ben romdhan en collaboration avec Salma ben mbarek </p>
                </div>
                
                
                <div class="footer-items">
                    <h3>Quik links</h3>
                   
                    <ul>
                    <a href=""><li>Home</li></a>
                    <a href=""><li>About</li></a>
                    <a href=""><li>Servecis</li></a>
                    <a href=""><li>Portfolio</li></a>
                    <a href=""><li>Contact Us</li></a>
                     </ul>   
                </div>
                
                <div class="footer-items">
                    <h3>Contact Us</h3>
                 
                   <ul>
                       <li><i class="fa fa-map-marker" aria-hidden="true"></i>Tébourba,Manouba,Tunis</li>
                       <li><i class="fa fa-phone" aria-hidden="true"></i>28118515</li>
                       <li><i class="fa fa-envelope" aria-hidden="true"></i>Benromdhan.azzza99@gmail.com</li>  
                   </ul>
                   <div class="social-media" >
                       <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                       <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                       <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                       <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                       <a href=""><i class="fa fa-google plus" aria-hidden="true"></i></a>
                   </div>
                </div>
                
                </div>
                </div>

             <?php 
 
 
                //recuperation des donnees
                if(isset($_POST[password]) && $_POST['email'] ){
                $email=$_POST['email'];
                $mdp=$_POST['password'];}
                
                
                $test=0;
                
                $req="SELECT * FROM user where email ='$email' and password='$password'";
                $result=$base->query($req);
                
                while($user=$result->fetchObject())  
                {
                    $test=1;
                    if($user->password==$password)
                    {    
                        echo"success";
                        header('Location: ../projet.html');
                        exit;
                    }
                    else
                        echo "incorrect password";
                }
                
                if(!$test)
                    echo"verify your email";
                
                ?>
               

 <script src="./../js/controler.js"></script>
</body>
</html>

