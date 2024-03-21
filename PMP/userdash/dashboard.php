<style>
 
  /* Reset some default browser styles */
  body, h1, h2, p {
    margin: 0;
    padding: 0;
  }

  body {
    font-family: Arial, sans-serif;
    background: url('/PMP/staff.jpg') no-repeat center center fixed;
    background-size: cover;
    text-align: center;
  }

  .navbar {
    background-color: #333;
    overflow: hidden;
  }

  /* Rest of your CSS styles... */


  /* Reset some default browser styles */
body, h1, h2, p {
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  text-align: center;
}

.navbar {
  background-color: #333;
  overflow: hidden;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.content {
  padding: 20px;
}

/* Style the welcome message */
.content h1 {
  font-size: 24px;
  margin-bottom: 10px;
}

/* Add more styles for user-specific content as needed */


</style>
<?php
session_start();
if (!isset($_SESSION['sname'])) {
  header("Location: login.html");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="navbar">
    <a href="search_academic.php">Academic</a>
    <a href="manage_projects.php">Manage Student Projects</a>
    <a href="/PMP/ad.php">Add My Students</a>
    <a href="/PMP/main.html">Logout</a>
    <h1>Welcome, <?php echo $_SESSION['sname']; ?></h1>
  </div>

  
  <div class="content">
    <!-- Your user-specific content goes here -->
   
  </div>
  
</body>
</html>
