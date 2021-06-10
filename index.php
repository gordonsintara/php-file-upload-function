<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
        if(isset($_FILES['userfile'])){
            pre_r($_FILES);
        }
        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }

?>



        <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="userfile" />
        <input type="submit" value="upload" />
         
        </form>
    
        <script src="" async defer></script>
    </body>
</html>