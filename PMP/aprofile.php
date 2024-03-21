<?php

session_start();

$conn = new mysqli('localhost','root','','company');
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);

}
if(isset($_SESSION['username'])){
    // header("Location: profile.php")
    // exit();
  echo "<h2>Hii</h2>";
 }
$user_id = $_SESSION['username'];
$sql = "SELECT * FROM login WHERE username=$username";
$result = $con->query($sql);

if($result->num_rows>0){
    $row = $result->fetch_assoc();
    echo "Name:".$row["username"]."<br>";
    echo "Email:".$row["email"]."<br>";

}else{
    echo "user not found";

}
$conn->close();


?>
