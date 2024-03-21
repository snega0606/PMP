<?php

$server_name = "localhost";
$db_username = "root";
$db_password ="";
$db_name = "company";

$connection= mysqli_connect("localhost","root","","company");

$dbconfig = mysqli_select_db($connection,$db_name);

if(!$connection){
    die("connection failed:" .mysqli_connect_error());
    echo '
    <div  class="container">
    <div class="row">
    <div class="col-md-8 l-auto text-center py-5 mt-5">
    <div class="card">
    <div class="card-body">
    <h1 class ="card-title bg-danger text-white>Database connection failed</h1>
    <h2 class="card-title">Database failure.</h2>
    <p class="card-text">Please check your database connection</p>
    <a href="#" class="btn btn-primary">:(</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    ';
}
?>