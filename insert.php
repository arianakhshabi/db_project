<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<?php include("config.php");
    
    $fname= $_POST ['fname'];
    $lname= $_POST ['lname'];
    $email= $_POST ['email'];
    $tel= $_POST ['tel'];
    $Addres= $_POST ['addres'];
    $weight= $_POST ['weight'];
    $height= $_POST ['height'];
    
    if (empty($fname)){
      echo "<div class='alert alert-warning' role='alert'>
      Please complete forms
      </div>";
    }
    else{

      $sql = "INSERT INTO users (firstname, lastname, email, telephone, Addres, weights, heights)
      VALUES ('$fname', '$lname', '$email','$tel','$Addres',$weight,$height)";
      
      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      header('Location: login.php');
    }

    ?>