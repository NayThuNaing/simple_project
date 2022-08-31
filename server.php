<h2>Server Page</h2>

<?php
   if(isset($_POST['save'])){
     echo "<pre>";
     print_r($_FILES);
    echo "<br>";
     $imgName=$_FILES['file']['name'];
     $tmpName=$_FILES['file']['tmp_name'];

     $targetFile='./assets/img/'.$imgName;
     if(move_uploaded_file($tmpName,$targetFile)){
     move_uploaded_file($tmpName,$targetFile);
     echo "Successful ......";
     }
     else{
        echo "Fail Uploading";
     }
   }
?>