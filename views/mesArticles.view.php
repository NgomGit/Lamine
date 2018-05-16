
<?php

session_start();

include ('../utils/functions.php');

 isUserLogin();

 $user_id =$_SESSION['id_user'];

    if(isset($_GET['info'])){

      $info =$_GET['info'];

        echo "<div class='success'>".$info."</div>";
    }



     $resultats =getMyArticles($user_id);


// print_r( $resultats);

     if (empty($resultats)){

       echo "<div class='error'>Vous n'avez pas encore de publication  </div>";

       $number =0;
     }
  

//traitement des commentaires 

  

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/header.css"/> 
      <link rel="stylesheet" href="../css/modal.css"/>   
    <link rel="stylesheet" href="../css/profile.css"/>
    <link rel="stylesheet" href="../css/blog-home.css"/>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
   
    
    
    
</head>
<body>

    <?php include ('../partials_views/header.php')?>

    
    
    
    <span id="urlImage"><?php if(!empty($chemin) ) echo $chemin ;  ?></span>

        <!-- Page Content -->
         
    <div class="container">

      <div class="row" >
     
        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4"> Mes publications

          <?php if(isset($number)) : ?>
            <small> <?= $number  ?> </small>
        <?php endif  ?>
          </h1>

          <!-- Blog Post -->
        <?php foreach($resultats as $resultat):?>
          <div class="card mb-4" >
            <img class="img-post"  src=<?= $resultat['image'] ?> alt="Card image cap">

            <div class="card-body " >
              <h2 class="card-title"> <?= $resultat['titre'] ?></h2>
              
              <p class="card-text"><?= $resultat['description']   ?></p>
               
            </div>
            <div class="card-footer text-muted">
                 <button class="btn btn-info detail" >Plus de details &rarr;</button>
              <span class="posted-on">Posted on <?=  $resultat['date'] ?></span>
                <button class="btn btn-primary btn-sm show-comments" >voir commentaires </button>

                <!-- Commentaires  -->
                
                    <form method="post" action="../actions/comment.action.php" class="form-comment" >
                       <div class="form-control">
                        <label for="contenue">Commentaires:</label>
                        <textarea class="form-control" name="contenu" rows="1"></textarea>
                      </div>
                  
                        <input type="text" name="id_article" value=<?= $resultat['id_article'] ?> style="display:none"/>
                         <input type="submit" class="btn btn-success  comment-input"  value="commenter" />
  
                    </form>

  <!-- <p><small><a href="">Like</a> - <a href="">Share</a></small></p> -->

                <div class="container-comments hide">
                    <div class="row" > 

                    
                     <?php $comments = getAllComments($resultat['id_article'] ) ;

                           $nbComments = count ($comments);

                         
                    
                        ?>
                       
                        <div class="col-md-12">
                          <div class="page-header">
                            <h1><small class="pull-right"><?= $nbComments?>  </small> Commentaires </h1>
                          </div> 

                          <!-- je parcours la liste des commentaire sur cet article  -->
                        <?php foreach($comments as $comment):?>

                      
                          <div class="comments-list" >

                           <h6 clas="date" style="float:right"><?=$comment['date'] ?>  </h6>
                              <div class="media">
                               
                                  <p class="pull-right"></p>
                                    <a class="media-left" href="#">
                                      <img src="../uploads/profile/profile.png" style="height:60px;width:60px;">
                                    </a>
                                
                                    <div class="media-body">
                                        <?php $user = getUser($comment['user_id'])?>
                                      <h4 class="media-heading user_name"><?= $user['prenom']." ".$user['nom'] ?></h4>
                                    
                                     <h5 class="commentaire">   <?= $comment['contenu'] ?> </h5>
                                      
                                    </div>
                                </div>
                              
                          </div><br/>
                          <?php endforeach ?>
                                              <!-- je termine ici le parcours  -->
                            <!-- div comment list -->
                        </div>
                    </div>
             
                 </div>
                <!-- div container hide -->
            </div>
            <!-- div footer text -->
     
         </div>  
         <?php endforeach ?>
         <!-- div md4  --> 

       </div>
        <!-- div md8  -->
 

      
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button" id="detail">Go!</button>
                </span>
              </div>
            </div>
          </div>

 

        </div>
      </div>

        
      </div>
      <!-- /.row -->


      <!-- pour l'affichage du modal  -->

            <div class="card mb-4 modal"  id="myModal"  >
                  <div class="modal-content">
                    <div class="modal-header">
                     <small class="image-desc">Creer une nouvelle article</small>
                      <span class="close">&times;</span>

                    </div>
                    <!-- <img  class="card-img-top" src="" height="300" width="300"/> -->

                <div class="card-body">

                  <div class="modal-body">
  
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

        </div>
    </div>
    <!-- /.container -->
    
    
     <script src="../scripts/jquery.min.js"></script>
    <script src="../scripts/profile.js"></script>

    
     <script type="text/javascript">

        $(document).ready(function(){


            var srcImage = $('#urlImage').text();
            $('#img-post').attr("src",srcImage);

        });




    </script>



<?php include ('../partials_views/menu.php')?>
  </body>
  </html>