<?php
include('backend_registrationform.php');

// user_photo(file) details will be capture here 
$file_name = $user_photo['name'];
$file_tmp_name = $user_photo['tmp_name'];

// this funciton will use 2 parameter 1: file temporary address 2: name of the directory + file name to be uploaded.
move_uploaded_file($file_tmp_name, 'image_upload/'. $file_name);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="name">Name: <?php echo $user_name ?> </label>
    <br>
    <label for="age">Age: <?php echo $user_age ?></label>
    <br>
    <label for="email">Email: <?php echo $user_email ?></label>
    <br>
    <label for="password">Password: <?php echo $user_password ?></label>
    <br>

    <img src="<?php echo 'image_upload/'. $file_name; ?>" width="900" height="500"/>
    <br>
    <a href="registrationform.html"><button>back to registrationform</button></a>
    <a href="delete_file.php"><button>Delete File</button></a>
</body>

</html>
