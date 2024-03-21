
<style>

  .fcc-btn{
    background-color:#199319;
    color:white;
    background: orangered;
  color: #fff;
  padding: 9px 20px;
  margin:40px;
  width: 65%;
  border-radius: 200px;
  margin-top: 10px;
  cursor: pointer;

  }
  
   </style>


<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!--
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div><br>
<div>
<center><b id="year"><a href="year.php"><font color="black">Year</a></b>
<b id="year"><a href="year.php"><font color="black">Year</a></b></center>
</div>

</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css" />
  
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li>
        <!--<a href="#" class="logo">
         <img src="/logo.jpg" alt="">--><br>
          <span class="nav-item"><center>DashBoard<center></span>
          
        </a></li><br>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        
        <li><a href="dept.php">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Department</span>
        </a></li>
        <li><a href="academic.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Projects</span>
        </a></li>
        <li><a href="ad.php">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Add Project</span>
        </a></li>
        <li><a href="./signup/index.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Add Admin</span>
        </a></li>
        <li><a href="search.php">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Search</span>
        </a></li>
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Languages</h1>
      </div>
      <div class="main-skills">
        <div class="card">
        <i class="fa fa-laptop"></i>
          <h3>PHP</h3>
          <p>No of PHP projecs:</p>
          <?php
          
          $java = "select * from records where language='php'";
          $java_run = mysqli_query($conn,$java);

          if($java_total = mysqli_num_rows($java_run))
          {
            echo '<h2 class="mb-0">'.$java_total.'</h2>';

          }else{
            echo '<h2 class="mb-0">No Data</h2>';
          }

          ?>
            <a href="phpfile.php" class="fcc-btn">View</a>
        </div>
        <div class="card">
          <i class="fa fa-laptop"></i>
          <h3>Java</h3>
          <p>No of Java projecs:</p>
          <?php
          
          $java = "select * from records where language='Java'";
          $java_run = mysqli_query($conn,$java);

          if($java_total = mysqli_num_rows($java_run))
          {
            echo '<h2 class="mb-0">'.$java_total.'</h2>';

          }else{
            echo '<h2 class="mb-0">No Data</h2>';
          }

          ?>
            <a href="javafile.php" class="fcc-btn">View</a>
        </div>
        <div class="card">
        <i class="fa fa-laptop"></i>
          <h3>Python</h3>
          <p>No of Python projecs:</p>
          <?php
          
          $java = "select * from records where language='Python'";
          $java_run = mysqli_query($conn,$java);

          if($java_total = mysqli_num_rows($java_run))
          {
            echo '<h2 class="mb-0">'.$java_total.'</h2>';

          }else{
            echo '<h2 class="mb-0">No Data</h2>';
          }

          ?>
           <a href="pythonfile.php" class="fcc-btn">View</a>
        </div>
        <div class="card">
        <i class="fa fa-laptop"></i>
          <h3>C#</h3>
          <p>No of C# projecs:</p>
          <?php
          
          $java = "select * from records where language='C#'";
          $java_run = mysqli_query($conn,$java);

          if($java_total = mysqli_num_rows($java_run))
          {
            echo '<h2 class="mb-0">'.$java_total.'</h2>';

          }else{
            echo '<h2 class="mb-0">No Data</h2>';
          }

          ?>
          <a href="csharpfile.php" class="fcc-btn">View</a>
        </div>
      </div>
        </body>
        </html>

   
     


     
