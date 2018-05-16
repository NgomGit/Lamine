<?php


        if(isset($_GET['errors'])){

            $errors =explode(".", $_GET['errors']);

            foreach($errors  as $error){

                if($error!=null){

                      echo "<div class='error' >".$error." </div>";

                }
            }
            
           $errors ="";     
    }

    if(isset($_GET['info'])){

        $info=$_GET['info'];

          echo "<div class='error' >".$info." </div>";
    }

    $info="";



?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/register.css"/>

    <link rel="stylesheet" href="../css/bootstrap.css"/>



</head>
<body>



        <form method="POST" action="../actions/register.action.php">
        
            <filedset>
                <legend> Join Us </legend><br/><br/>
        
            <input type="text" name="nom" id="nom" placeholder="Nom" required/>
                <input type="text" name="prenom" id="prenom" placeholder="Prenom" required/><br/><br/><br/>
                <input type="email" name="email" id="email" placeholder="Email" required   /><br/><br/>
            
                <input type="text" name="numero" id="numero" placeholder="Numero de Telephone"  required />
                <input type="date" name="date_naiss" id="date_naiss" placeholder="Date de Naissance " required /> 
            
                <label>
                    Sexe 
                </label>
                    <select class="form-control"  id ="select" name="sexe">
                        
                        <option name="feminin" value="f"> F </option>
                        <option name="masculin" value="m">M </option>
                        
                    </select>

            
            <br/><br/>


                <!-- Pour la confirmation de mot de passe  -->
                <input type="password" name="password" id="password" placeholder="Mot de passe " required  />

                <input type="password" name="passwordConf" id="passwordConf" placeholder="Confirmer le mot de passe " required /><br/><br/>
        

            </filedset>

            <input type="submit" name="envoyer" id="envoyer" value="Creer un compte" /><br/><br/>

             <a href="login.view.php">Deja Membre  ? </a>

        </form>

    </div>




     <script type="text/javascript" src="../scripts/jquery.js"></script>
    <script type="text/javascript" src="../scripts/bootstrap.js"></script>
    <script type="text/javascript" src="../scripts/form.js"></script>
    


<script type="text/javascript">

$(document).ready(function(){

 


});


</script>
    
</body>
</html>

