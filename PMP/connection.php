<?php

$servername= "localhost";
$username="";
$password="";
$dbname= "company";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);

}
if($_SERVER["REQUEST_METHOD"]=== TRUE){
    $rollno=$_POST["rollno"];
    $name=$_POST["name"];
    $department=$_POST["department"];
    $incharge=$_POST["incharge"];
    $year=$_POST["year"];
    $title=$_POST["title"];
    $description=$_POST["description"];
}
$sql="insert into records(rollno,name,department,incharge,year,title,description)
values('$rollno','$name','$department','$incharge','$year','$title','$description')";

if($conn->query(sql) === TRUE){
    echo "Project Added Succesfully";

}



?>