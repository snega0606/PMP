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

/* Style the form */
form {
  width: 50%;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

form input[type="text"],
form input[type="file"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

form input[type="submit"],
form input[type="button"]
{
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Add more styles for user-specific content as needed */

</style>
<?php
session_start();
if (!isset($_SESSION['sname'])) {
  header("Location: login.html");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $rollno = $_POST['rollno'];
  $name = $_POST['name'];
  $department = $_POST['department'];
  $incharge = $_POST['incharge'];
  $year = $_POST['year'];
  $title = $_POST['title'];
  $language = $_POST['language'];
  
  // Handle file upload
  $file = $_FILES['file'];
  $file_name = $file['name'];
  $file_tmp_name = $file['tmp_name'];
  $file_error = $file['error'];

  if ($file_error === 0) {
    $upload_directory = $_SERVER['DOCUMENT_ROOT'] . '/PMP/uploads/'; // Define the directory for uploaded files within htdocs/PMP

    if (!file_exists($upload_directory)) {
      mkdir($upload_directory, 0755, true); // Create the directory if it doesn't exist
    }

    $file_destination = $upload_directory . $file_name;

    if (move_uploaded_file($file_tmp_name, $file_destination)) {
      // Establish a database connection
      $conn = new mysqli("localhost", "root", "", "company");

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Use prepared statements to prevent SQL injection
      $sql = "INSERT INTO records (rollno, name, department, incharge, year, title, language, file) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssssssss", $rollno, $name, $department, $incharge, $year, $title, $language, $file_destination);

      if ($stmt->execute()) {
        echo "Student record added successfully.";
      } else {
        echo "Error: " . $conn->error;
      }

      $conn->close();
    } else {
      echo "File upload failed.";
    }
  } else {
    echo "Error uploading the file.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Student</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="navbar">
    <!-- Your navigation links go here -->
  </div>

  <div class="content">
    <h1>Add Student</h1>
    <form method="post" enctype="multipart/form-data">
      <label for="rollno">Roll No:</label>
      <input type="text" name="rollno" required><br><br>

      <label for="name">Name:</label>
      <input type="text" name="name" required><br><br>

      <label for="department">Department:</label>
      <input type="text" name="department" required><br><br>

      <label for="incharge">Incharge:</label>
      <input type="text" name="incharge" required><br><br>

      <label for="year">Year:</label>
      <input type="text" name="year" required><br><br>

      <label for="title">Title:</label>
      <input type="text" name="title" required><br><br>

      <label for="language">Language:</label>
      <input type="text" name="language" required><br><br>

      <label for="file">File:</label>
      <input type="file" name="file" required><br><br>

      <input type="submit" value="Add Student">
   
      <input type="button" value="Back" onclick="goToPage()">

<script>
function goToPage() {
  // Specify the URL of the page you want to navigate to
  var targetPage = "dashboard.php"; // Change this to the URL you want

  // Use JavaScript to redirect the user to the specified page
  window.location.href = targetPage;
}
</script>


    </form>
  </div>
</body>
</html>
