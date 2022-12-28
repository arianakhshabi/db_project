



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <?php include("config.php"); ?>
    <div class="container form">
        <form action="insert.php" method="post">
        <a href="login.php"><button type="button" class="btn btn-dark back" href="login.php">back</button></a>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname">
        
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">LastName</label>
        <input type="text" class="form-control" id="exampleInputPassword1"name="lname">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telephone</label>
        <input type="tel" class="form-control" id="exampleInputPassword1 "name="tel" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" class="form-control" id="exampleInputPassword1"name="addres">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <div class="row g-7 align-items-center weight" >
    <div class="col-auto">
        <label for="Weight" class="col-form-label">Weight</label>
    </div>
    <div class="col-auto">
        <input type="number" id="Weight" class="form-control"name="weight" >
    </div>
    </div>
    <div class="row g-7 align-items-center Height">
    <div class="col-auto">
        <label for="height" class="col-form-label">Height</label>
    </div>
    <div class="col-auto">
        <input type="number" id="height" class="form-control" name="height">
    </div>
    </div>
    
    
    <button type="submit" class="btn btn-primary sub">Submit</button>
    </form>
    </div>
    
</body>
</html>