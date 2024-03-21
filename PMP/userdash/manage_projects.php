<style>
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
<style>
    .dbresult,.dbresult td, .dbresult th{
        border: 1px solid black;
        border-collapse: collapse;
        padding:  8px;
    }

    .dbresult{
        width: 1000px;
        margin: auto;

    }

    .dbresult tr:nth-child(odd){
        background-color: #b2d0d6;
    }

    .dbresult tr:nth-child(even){
        background-color: lightcyan;
    }
    .fcc-btn{
  background-color:#333;
  color:white;
  background: green;
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
session_start();
if (!isset($_SESSION['sname'])) {
  header("Location: login.html");
}

// Establish a database connection
$conn = new mysqli("localhost", "root", "", "company");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sname = $_SESSION['sname'];

// Fetch students whose incharge matches the user's name
$sql = "SELECT * FROM records WHERE incharge = '$sname'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage Student Projects</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="navbar">
    <a href="search_academic.php">Academic</a>
    <a href="manage_projects.php">Manage Student Projects</a>
    <a href="/PMP/ad.php">Add My Students</a>
    <a href="logout.php">Logout</a>
  </div>

  <div class="content">
   
    <h2>Students under your incharge:</h2>
    <ul>    <div class="container my-5">
            <table class="table">
      <?php
      if ($result->num_rows > 0) {
        echo '<table class="dbresult">';
        echo '<thead>
        <tr>
        <th>rollno</th>
        <th>name</th>
        <th>department</th>
        <th>incharge</th>
        <th>year</th>
        <th>title</th>
        <th>language</th>
        
        <th>Documentation</th>
        </tr>
        </thead>
        ';
        while ($row = $result->fetch_assoc()) {
          echo '<tbody>
          <tr>
          <td>'.$row['rollno'].'</td>
          <td>'.$row['name'].'</td>
          <td>'.$row['department'].'</td>
          <td>'.$row['incharge'].'</td>
          <td>'.$row['year'].'</td>
          <td>'.$row['title'].'</td>
          <td>'.$row['language'].'</td>
          
          <td>'.$row['file'].'</td>
          </tr>
          </tbody>
          ';
          }

      }else{
          echo '<h2 class=text-danger> Data Not Found </h2>';
      }
      
  
      ?>
    </table>
</div></ul>
  </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
