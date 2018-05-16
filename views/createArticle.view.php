<?php


        if(isset($_GET['error'])){

            $error = $_GET['error'];

            if(!empty($error)){

                echo $error;
            }
        }

 echo date("l d/F/Y H:i:s ");

 $jour = explode(' ',date("l d/F/Y H:i:s "));

 print_r ($jour);

//  echo strftime(" %A %d %B %Y %H h %M m %S s %Z",date("l d/F/Y H:i:s "));
 echo date('l d/F/Y H:i:s');
?>




<!DOCTYPE html>
<html >
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
       <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/header.css"/> 
     <link rel="stylesheet" href="../css/bootstrap.css"/>
      <link rel="stylesheet" href="../css/new_article.css"/>

</head>
<body>

        <div class="container">

            <div class="col-md-8">

                <h1 class="my-4">Article 
                    <small>image description</small>
                </h1>


                <div class="card mb-4">

            
                    <!-- <img  class="card-img-top" src="" height="300" width="300"/> -->

                    <div class="card-body">

                    <!-- <h2 class="card-title"> Ajouter une nouvelle article </h2> -->
                    
                    <form action="../actions/createArticle.action.php" method="post" enctype="multipart/form-data">

                        Select image to upload:
                            <input class="btn btn-lg btn-warning" type="file" name="fileToUpload" id="fileToUpload"  required/><br/>
                            <br/>
                            

                            <div class="form-group">
                              
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Titre" required/><br/>
                                             <input type="text" class="form-control" name="type" id="title" placeholder="Type" required/><br/>
                                           
                                            <textarea class="form-control" rows="2" name="description" id="description" placeholder="Commentaire" required></textarea>

                                <div  id="div-check">

                                    <label for="etat">
                                   Visible
                                    </label>
                                    <input type="checkbox" id="etat" name="etat" />
                                 </div> 
                            </div>

                            

                            <input class="btn btn-success" type="submit" value="Creer article" name="submit">
                        
                    </form>

                </div>  
            </div>  
     

        </div>

    
    
    
    
    
    <script src="../scripts/jquery.min.js"></script>
    <script src="../scripts/profile.js"></script>
    <script src="../scripts/bootstrap.bundle.min.js"></script>


    <script >

        $("#fileToUpload").change(function(){

            console.log($('#fileToUpload').val()) ;

            
        })

    </script>

</body>
</html>