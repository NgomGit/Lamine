
<?php

    session_start();

    include ('../utils/functions.php');

   $etat = 0;

   
    $title = $_POST['title'];
    $type = $_POST['type'];

    $description =$_POST['description'];

   

    if(isset($_POST['etat'])){

        $etat = 1;
        
    }

    $i= 0;

    $errors = array();



    $errors[] = secureDataInput($title,"titre");
    $errors[] = secureDataInput($type,"type");
    $errors[] = secureDataInput($description,"description");


    foreach($errors as $error){

        if(empty($error)){

            $i++;
        }
    }

    if($i==3){

        $title =securisation($title);
        $type = securisation($type);
        $description = securisation($description);

       

        $image = upload();

        if($image!=null){ 

            $user_id = $_SESSION['id_user'];
            
            echo $image;

            $date = date('l, d F Y H:i:s');

            $resultat =  createArticle($title,$description,$image,$date,$etat,$type,$user_id);

            if($resultat){

                $info = "Creation de l'article reussie ";

                header("Location:../views/profile.view.php?infoArticle=$info");

            }else{

                $info = "Erreur survenue lors de l'insertion ";
            }
            
            echo $info;
            echo $title ."<br/>";
            echo $type ."<br/>";
            echo $description ."<br/>";
            echo $etat ."<br/>";
            echo $user_id;


        }else{


            echo "File is not an image ";
        }
        
  
   
                
    }
    
   
?>