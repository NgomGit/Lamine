<?php

    echo "bienvenue dans affaiche article ";

    $chemin = $_GET['imageUrl'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
       <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/header.css"/> 
     <link rel="stylesheet" href="../css/bootstrap.css"/>
</head>
<body>

        <div class="container">

            <div class="col-md-8">

                <h1 class="my-4">Article 
                    <small>image description</small>
                </h1>


                <div class="card mb-4">
                    
                    <span id="urlImage"><?php if(!empty($chemin) ) echo $chemin ;  ?></span>
            
                    <img id="img-post" class="card-img-top" src="" height="300" width="300"/>

                    <div class="card-body">

                    <!-- <h2 class="card-title"> Ajouter une nouvelle article </h2> -->
                  <p class="card-text" > description </p>

                </div>  
            </div>  
     

        </div>

        
     <script src="../scripts/jquery.min.js"></script>
    <script src="../scripts/profile.js"></script>
    <script src="../scripts/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){


            alert('je marche ');

            var srcImage = $('#urlImage').text();
            $('#img-post').attr("src",srcImage);

        });




    </script>


</body>
</html>


       