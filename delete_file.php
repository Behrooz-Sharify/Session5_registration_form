<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="file_name">
        <button type="submit">Delete File</button>
    </form>
</body>

</html>

<?php

if(isset($_POST['file_name'])){
    $file_name = $_POST['file_name'];
    $path = "image_upload/". $file_name;
    $exists = file_exists($path);

    if($exists){
        unlink($path);
        echo 'file deleted...';
    }else{
        echo 'file not found!';
    }
}

?>