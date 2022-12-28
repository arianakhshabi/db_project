<?php
 include("config.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="view.css">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->
<br>
<?php
$sql = "SELECT * FROM practice";
$result = mysqli_query($conn, $sql);

?>
<div class='container t1'>
    <div class="home">

        <a href="index.php"><button type="button" class="btn btn-danger backhome " href="index.php">Home</button></a>
    </div>
    <table class="table table-dark table-striped ">
    <thead>
        <tr>
        <th scope="col">Hafte</th>
        <th scope="col">Push-up</th>
        <th scope="col">Sit-up </th>
        <th scope="col">Plank</th>
        <th scope="col">Squat</th>
        <th scope="col">Number of set in each round</th>


        </tr>
    </thead>
    <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
        <th scope="row"><?php echo $row["hafte"]?></th>
        <td><?php echo $row["Push-up"]?></td>
        <td><?php echo $row["Sit-up"]?></td>
        <td><?php echo $row["Plank"]?></td>
        <td><?php echo $row["Squat"]?></td>
        <td><?php echo $row["nset"]?></td>
        </tr>
        
        <?php
          }
        } else {
          echo "
          <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
  
          <symbol id='exclamation-triangle-fill' viewBox='0 0 16 16'>
          <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
          </symbol>
          </svg>

          <div class='alert alert-warning d-flex align-items-center' role='alert'>
          <svg class='bi flex-shrink-0 me-2' role='img' aria-label='Warning:'><use xlink:href='#exclamation-triangle-fill'/></svg>
          <div>
            <h1>thers no data in database
            </h1>
          </div>
          </div>";
        }
        mysqli_close($conn);
        ?>  
    </tbody>
    </table>

</div>