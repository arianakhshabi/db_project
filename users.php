<?php
session_start();
$new_user=$_SESSION["Username"];

include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="user container">
        <h3>Hello <?php echo $new_user?> </h3>
        <a href="index.php"><button type="button" class="btn btn-danger text-decoration-none text-light">log out</button></a>
        <a href="practice.php"><button type="button" class="btn btn-success text-decoration-none text-light ">practice</button></a>
        



    </div>



</body>
</html>