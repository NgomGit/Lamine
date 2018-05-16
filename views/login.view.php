<?php

       if(isset($_GET['errors'])){

            $error =$_GET['errors'];

                      echo "<div class='error' >".$error." </div>";
                       $errors ="";
          
         }

         

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../css/main.css"/>
        <link rel="stylesheet" href="../css/login.css"/>
          <!-- <link rel="stylesheet" href="../css/bootstrap.css"/> -->


</head>
<body>

    <form method="POST" action="../actions/login.action.php">
    
        <filedset>
            <legend> Connexion ici !!!</legend>
    
            <input type="text" name="email" id="email" placeholder="Example@gmail.com"  required/>
          
            <input type="password" name="password" id="password" placeholder="Mot de passe "  required />
         
            <input type="submit" name="envoyer" id="envoyer" value="Se Connecter" />

        
        </filedset><br/><br/><br/><br/>

        <a href="register.view.php">Pas encore mebre ? </a>
    
    </form>

    <script type="text/javascript" src="../scripts/jquery.js"></script>
    <script type="text/javascript" src="../scripts/bootstrap.js"></script>
    <script type="text/javascript" src="../scripts/form.js"></script>
    
</body>
    
</html>



