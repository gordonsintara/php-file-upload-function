<?php

if(isset($_POST['submit'])){

    $file = $_FILES['file'];
    
    $fileName    = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize    = $file['size'];
    $fileError   = $file['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 700000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index2.php?uploadok");
           
            }else{
                echo "Your file is to large";
            }
        }else{
            echo "somthing went wrong while uploading your file";
        }
    }else{
        echo "incorrect extention";
    }
}