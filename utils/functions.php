<?php


    function connectDB(){

        $servername= "localhost";
        $username = "root";
        $motdepasseSev="";
    
        $db="blog";

        if(mysqli_connect_error()){

            die ("Erreur de connexion à la base de donnee ");

        }else{

          return   $link =mysqli_connect($servername,$username,$motdepasseSev,$db);

        }

    }

    function  createArticle($title,$description,$image,$date,$etat,$type,$user_id){

        $link = connectDB();

        $querry = "INSERT INTO `article` ( `titre`, `description`, `image`, `date`, `etat`, `type`, `user_id`)

                        VALUES ('".$title."','".$description."','".$image."','".$date."','".$etat."','".$type."','".$user_id."') ";
      
        // "INSERT INTO  `article` (`titre`,`description`,`image`,`date`,`etat`,`type`,`user_id`) 
                    
        //             

                    

                       // VALUES ('titre','description','image','true',now(),'reseau',14) ";

                          // VALUES ('titre','description','../uploads/IMG-20170811-WA0044.jpg',date('l d/F/Y H:i:s'),0,'reseau',14) ";

         if(mysqli_query($link,$querry)){

           return true;
        }else{

           return false ;
        }

    }

function upload(){


        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        if(isset($_POST['submit'])){

        $fileImage = $_FILES["fileToUpload"]["tmp_name"];

        echo $fileImage;

        $error ="";

    
    $imageExist = isFileExist($target_file);
    

    if(isFormatImages($imageFileType)){


            if($imageExist){

                return $target_file;
                    
            }else{

                if(move_uploaded_file($fileImage,$target_file)){

                

                   return $target_file;

                }

            }
    
        }
    }


}
    
  

    function secureDataInput($input,$name){

        $input = trim($input);

        if(empty($input)){

            return   "Veuillez remplir le champs ".$name;
             
        }

     
    }

    function isConformMdp($password,$passwordConf){

        if($password!=$passwordConf){

            return "Les deux mot de passe en concordent pas ";

        }
            
   
    }

    function securisation($input){

        $input = strip_tags(htmlspecialchars(htmlentities($input))) ;
     
        return $input;

    }



    function isConnect(){
        
        if(!isset($_SESSION['id'])||$_SESSION['id']<=0){

             header('Location:login.php');

          }

    }

    function addUser($prenom,$nom,$email,$password,$numero,$sexe,$date_naiss){

        $link=connectDB();

       $querry = "INSERT INTO `users` (`prenom`,`nom`,`email`,`password`,`numero`,`sexe`,`date`) 
        
        VALUES  ('".$prenom."','".$nom."','".$email."','".$password."','".$numero."','".$sexe."','".$date_naiss."') ";

        if(mysqli_query($link,$querry)){

           return true;
        }else{

           return false ;
        }
                                                    
    }

    function selectCurrentUser($email){

        $link = connectDB();

        $query = "SELECT * FROM `users` WHERE email= '".$email."' ";

        $result = mysqli_query($link,$query);

        if(mysqli_num_rows($result)>0){

           return  $row = mysqli_fetch_assoc($result);

        }

        return null;

    }

    function getUser($user_id){

         $link = connectDB();

        $query = "SELECT * FROM `users` WHERE id= '".$user_id."'";


    $result = mysqli_query($link,$query);

    if(mysqli_num_rows($result)>0){

         $row = mysqli_fetch_assoc($result);
         return $row;
    }

    return false;



        
    }

    function isUserConnect($email,$password){

        $link = connectDB();

        $query = "SELECT * FROM `users` WHERE email= '".$email."' AND password ='".$password."' ";


    $result = mysqli_query($link,$query);

    if(mysqli_num_rows($result)>0){

         $row = mysqli_fetch_assoc($result);
         return $row;
    }

    return false;


        
    }

function isImageCorrect($file){

     return false;
}
    
 



//Test si l'image existe deja 

function isFileExist($target_file){

    if (file_exists($target_file)) {
        return true; 
    }

    return false;
}

function isFormatImages($imageFileType){

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        return false;
    }

    return true;

}

    function getAllArticles(){

        $link = connectDB();

        $query = "SELECT *FROM `article` ORDER BY id_article DESC ";


        $result = mysqli_query($link,$query);

        $results = array();

        while($reponse =mysqli_fetch_assoc($result)){

            $results[]= $reponse;
           
        }

         return $results;

}

function addComment($contenu,$date,$id_article,$user_id){

     $link = connectDB();

        $querry = "INSERT INTO  `commentaire` (`contenu`,`date`,`id_article`,`user_id`) 
                    
                    VALUES ('".$contenu."','".$date."','".$id_article."','".$user_id."') ";

    if(mysqli_query($link,$querry)){

           return true;
        }else{

           return false ;
        }
                       

}

function getAllComments($id_article){

    $link = connectDB();

        $query = "SELECT * FROM commentaire  WHERE id_article='".$id_article."' ORDER BY id_commentaire DESC ";


        $result = mysqli_query($link,$query);

        $results = array();

        while($reponse =mysqli_fetch_assoc($result)){

            $results[]= $reponse;
           
        }

         return $results;

}

function getMyArticles($user_id){

     $link = connectDB();

        $query = "SELECT * FROM article  WHERE user_id='".$user_id."' ORDER BY id_article DESC  ";


        $result = mysqli_query($link,$query);

        $results = array();

        while($reponse =mysqli_fetch_assoc($result)){

            $results[]= $reponse;
           
        }

         return $results;


}
    function isNumberCorrect($number){


    }

    function isUserLogin(){

          if(!isset($_SESSION['id_user'])||$_SESSION['id_user']<=0){

             header('Location:../views/login.view.php');

          }
    }

    function getArticles($type){

         $link = connectDB();

        $query = "SELECT * FROM `article` WHERE type='".$type."'  ";


        $result = mysqli_query($link,$query);

        $results = array();

        while($reponse =mysqli_fetch_assoc($result)){

            $results[]= $reponse;
           
        }

         return $results;

    }

    function addPost(){


    }


    function logOut(){


    }

    function connexionDB(){


    }

    
?>