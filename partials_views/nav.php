 
 <?php

//  session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>

    <nav>  
        <ul>
            
            <li>
                <a href="../views/profile.view.php">Acceuil </a>
            </li>
            
             <li>
            <?php if(isset($_SESSION['id_user'])) : ?>
                <a  href="../views/mesArticles.view.php">Mes articles </a>    
            </li>
            
             <li>
                <a  href="../views/categories.view.php">Categories </a>    
            </li>
            <?php endif ?>
             <li>
                <a  href="">contacts </a>    
            </li>

             <li>
                <a  href="#">Apropos  </a>
            </li>
                
        </ul>
    </nav>

</body>
</html>

