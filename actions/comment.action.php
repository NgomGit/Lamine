<?php 

    session_start();

 include ('../utils/functions.php');

    $user_id = $_SESSION['id_user'];

    $contenu = $_POST['contenu'];

     $id_article = $_POST['id_article'];

    $date = date('l,d F Y H:i:s');

 

    $resultat = addComment($contenu,$date,$id_article,$user_id);

    if($resultat){

        $info = "Commentaire ajoutée";

        header('Location:../views/profile.view.php?info='.$info);
    }else{

        echo $info ="probleme survenu lor de l'insertion";

        // header('Location:../views/profile.view.php?error='.$info);
    }
?>