<?php

session_start();

    include ('../utils/functions.php');


    $nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $email =$_POST['email'];

    $numero =$_POST['numero'];
    $date_naiss =$_POST['date_naiss'];
    $sexe =$_POST['sexe'];
    $password =$_POST['password'];
    $passwordConf =$_POST['passwordConf'];
    
    $message =array();

     $i = 0;

    //je fais les tests à ce niveau 

    $message[]=secureDataInput($nom,'nom');
    $message[]=secureDataInput($prenom,'prenom');
    $message[]=secureDataInput($email,'email');

    $message[]=secureDataInput($numero,'numero');
    $message[]=secureDataInput($prenom,'date_naiss');
    $message[]=secureDataInput($email,'sexe');

    $message[]=secureDataInput($password,'Mot de passe');
   $message[]= secureDataInput($passwordConf,'Confirmation de mot de passe ');

   $message[] =isConformMDP($password,$passwordConf);

    $link=connectDB();

    // echo $link;
    
   
//    print_r($message);

    foreach($message as $error){

        if(empty($error)){

            $i++;
        }
    }


        if($i==9) {

            $nom =securisation($nom);
            $prenom =securisation($prenom);
            $email =securisation($email);

            $numero =securisation($numero);
          
            $info =  addUser($prenom,$nom,$email,$password,$numero,$sexe,$date_naiss);

             
            if($info){    

                $row =selectCurrentUser($email);

                if($row!=null){

                     $_SESSION['id_user']= $row['id'];
                     $_SESSION['full_name'] = $row['prenom']." ".$row['nom'];

                      $information = "Bienvenue dans votre profile  ".$_SESSION['full_name'];
                        
                      header('Location:../views/profile.view.php?info='.$information);
                }      
               
            }else{
                
              echo "insertion echouée ";

            }

           

        }else {

            
            $errors = join($message,".");

            header("Location:../views/register.view.php?errors=$errors");
        }


   
    

?>