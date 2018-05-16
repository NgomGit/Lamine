<?php

session_start();

    include ('../utils/functions.php');


    $email =$_POST['email'];
    $password =$_POST['password'];
    
  

    $link = connectDB();

   
  if (isUserConnect($email,$password)){

       $row =isUserConnect($email,$password);

       $_SESSION['id_user']=$row['id'];
       $_SESSION['full_name']= $row['prenom']." ".$row['nom'];

        $information = "Bienvenue dans votre profile  ".$_SESSION['full_name'];

        header('Location:../views/profile.view.php?info='.$information);

  }else{

      $information = "Login ou mot de passe incorrect  ";
    header("Location:../views/login.view.php?errors=$information");

  }
    
   
//    print_r($message);


        if($message==null) {

           

        }else {

            
            $errors = join($message,".");

            
        }





?>