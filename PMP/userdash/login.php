
<?php
session_start();
// Establish a database connection
$conn = new mysqli("localhost", "root", "", "company");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sname = $_POST['sname'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM staff WHERE sname = '$sname' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $_SESSION['sname'] = $sname;
    header("Location: dashboard.php");
  } else {
    // Login failed, show an error message
    echo "Login failed. Please check your username and password.";
  }
}

// Close the database connection
$conn->close();
?>
