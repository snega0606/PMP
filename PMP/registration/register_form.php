<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $confirm_password = md5($_POST['confirm_password']);
 //  $user_type = $_POST['user_type'];

   $select = " SELECT * FROM login WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($password != $confirm_password){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO login(name, email, password, confirm_password) VALUES('$name','$email','$password','$confirm_password)";
         mysqli_query($conn, $insert);
         header('location:PMP/login.php');

      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="confirm_password" required placeholder="confirm your password">
     <!-- <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>-->
      <input type="submit" name="submit" value="register now" class="form-btn"><a href="login.php"></a>
      <p>already have an account? <a href="./PMP/login.php">login now</a></p>
   </form>

</div>

</body>
</html>