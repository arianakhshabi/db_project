<?php include("config.php");
    session_start();
    $nUid=$_SESSION["eID"];
    $fname= $_POST ['fname'];
    $lname= $_POST ['lname'];
    $email= $_POST ['email'];
    $tel= $_POST ['tel'];
    $Addres= $_POST ['addres'];
    $weight= $_POST ['weight'];
    $height= $_POST ['height'];
    

    $sql = "UPDATE users SET firstname='$fname', lastname='$lname', email='$email',telephone=$tel, Addres='$Addres' ,weights=$weight, heights=$height WHERE id=$nUid";

    if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . mysqli_error($conn);
    }
    header('Location: view.php');
    ?>