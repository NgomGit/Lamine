
<?php

    include("../utils/functions.php");
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
   $fileImage = $_FILES["fileToUpload"]["tmp_name"];

   $error ="";

  
   $imageExist = isFileExist($target_file);
  

   if(isImageCorrect($fileImage)&&isFormatImages($imageFileType)){


        if($imageExist){

            $error ="Image exist ";

            header("Location:../views/createArticle.view.php?error=$error");
                
        }else{

            if(move_uploaded_file($fileImage,$target_file)){

               

                   header("Location:../views/profile.view.php?imageUrl=".$target_file);

            }

        }
  
   }
   
   


}
// Check if file already exists

// Check file size

// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }



?>

<script type="text/javascript">
    alert('bonjour')

</script>
