<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<?php include("config.php");
session_start();
$U_name=$_POST ['fname'];
$email=$_POST ['email']; 
$_SESSION["Username"]=$U_name;


$sql = "SELECT * FROM users where firstname='$U_name' and email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     $fname=$row["firstname"];
//     $lname= $row["lastname"];
//     $email=$row["email"];
//     $tel=$row["telephone"];
//     $Addres=$row["Addres"];
//     $weight=$row["weights"];
//     $height=$row["heights"];


    header('Location: users.php');

}

else {
    echo "<div class='alert alert-warning' role='alert'>
    Please input valid number
  </div>";
    
}

mysqli_close($conn);
?>