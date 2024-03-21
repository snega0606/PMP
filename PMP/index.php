<style>
.fcc-btn{
  background-color:#333;
  color:white;
  background: blue;
color: #fff;
padding: 9px 20px;
margin:40px;
width: 25%;
border-radius: 200px;
margin-top: 10px;
cursor: pointer;

}</style>
<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<center><a href="main.html" class="fcc-btn">Back</a><br>
  <br></center>
      
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>

