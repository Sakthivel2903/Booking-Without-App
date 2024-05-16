<?php
error_reporting(0);
?>
<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $script = "<script>
window.location = 'choose.html';</script>";
echo $script;
     
   }else{
      echo '<script>alert("incorrect email or password!")</script>';
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
    <link href="Assets/style1.css" rel="stylesheet" >
</head>
<style>
 
</style>
<body>
    <div class="container">
           <form action="" method="post">
              <h3>login now</h3><br>
              <n>Email:</n>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" required placeholder="enter your email"><br><br><br>
              <n>Password:</n><input type="password" name="password" required placeholder="enter your password"><br><br><br>
              <input type="submit" name="submit" value="Login" class="form-btn"><br><br>
              <p>Don't have an account? <br><br><a href="register_form.php">Register now</a></p>
            </form>
    </div>
</body>
</html>