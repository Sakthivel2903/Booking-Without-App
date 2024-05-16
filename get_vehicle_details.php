<?php
error_reporting(0);
?>
<?php

@include 'config.php';

$tr = $_POST['transport'];
$t = $_POST['tot-btn'];

if(isset($_POST['submit']))
{

  if($tr=="bike")
   {
    $insert = "INSERT INTO avail_transport(vehicle_name,available_seats) VALUES('$tr','$t')";
    mysqli_query($conn, $insert);
    $script = "<script>
    window.location = 'https://book.stripe.com/test_00g3dD5l2fHXfja3cc';</script>";
    echo $script;
   }
  
   else if($tr=="car")
   {
    $insert = "INSERT INTO avail_transport(vehicle_name,available_seats) VALUES('$tr','$t')";
    mysqli_query($conn, $insert);
    $script = "<script>
    window.location = 'https://book.stripe.com/test_00g3dD5l2fHXfja3cc';</script>";
    echo $script;
    echo $script;
   }
   else if($tr=="vane")
   {
    $insert = "INSERT INTO avail_transport(vehicle_name,available_seats) VALUES('$tr','$t')";
    mysqli_query($conn, $insert);
    $script = "<script>
    window.location = 'https://book.stripe.com/test_00g3dD5l2fHXfja3cc';</script>";
    echo $script;
   }
   else if($tr=="truck")
   {
    $insert = "INSERT INTO avail_transport(vehicle_name,available_seats) VALUES('$tr','$t')";
    mysqli_query($conn, $insert);
    $script = "<script>
    window.location = 'https://book.stripe.com/test_00g3dD5l2fHXfja3cc';</script>";
    echo $script;
   }
   else
   {
    echo '<script>alert("Incorrect vechicle type")</script>';
   }

  };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="get_vehicle_details/style.css" rel="stylesheet">
</head>
<body>
  
  <style>
    .form-btn
{
    margin-left: 3cm;
    background-color: lightblue;
    font: bold 11px Arial;
    text-decoration: none;
    background-color: #EEEEEE;
    color: #333333;
    padding: 6px 10px 6px 10px;
    border-top: 1px solid #CCCCCC;
    border-right: 1px solid #333333;
    border-bottom: 1px solid #333333;
    border-left: 1px solid #CCCCCC;
}
.container
{
    height: 10cm;
    width: 10cm;
    background-color: white;
    margin-left: 14cm;
    margin-top: 5cm;
    border-radius: 20px;
}
    </style>
    <form class="container" method="post" name="form1">
        <h2>CHOOSE.....!</h2>
        <div class="cont-1">
        <label for="cars">Choose Your Vehicle : </label>
        <select name="transport" id="cars">
            <option value="select">SELECT</option>
          <option value="bike">BIKE</option>
          <option value="car">CAR</option>
          <option value="vane">VANE</option>
          <option value="truck">TRUCK</option>
        </select>
        <br><br><br>
        Availabe Seats : <input type="text" id="tot-btn" name="tot-btn"><br><br><br>
       <input type="submit" name="submit" value="SUBMIT" class="form-btn" />
        </div>
      </form>
</body>
</html>