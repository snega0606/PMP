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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
<?php
session_start();
include('dbconfig.php');
?>
  

<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
 Add New Project
</button>-->

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Project Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      <div class="form-group">
            <label>Roll No</label>
            <input type="text" name="rollno" class="form-control" placeholder="rollno" required>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="name" required>
        </div>
        <div class="form-group">
            <label>Department</label>
            <input type="text" name="department" class="form-control" placeholder="department" required>
        </div>
        <div class="form-group">
            <label>Incharge</label>
            <input type="text" name="incharge" class="form-control" placeholder="incharge" required>
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="text" name="year" class="form-control" placeholder="year" required>
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="title" required>
        </div>
        <div class="form-group">
            <label>Language</label>
            <input type="text" name="language" class="form-control" placeholder="language" required>
        </div>
        <div class="form-group">
            <label>PDF File</label>
            <input type="file" name="pdf_file" class="form-control" accept=".pdf" required>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info" name="save">Save Projects </button>
      </div>
</form>
    </div>
  </div>
</div>
<div class="container-fluid">
<br><br><center>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1"> Add Project</button>
<a href="profile.php" class="btn btn-success">Back</a></center>

</div><br><br>

<?php
$link=mysqli_connect('localhost', 'root','', 'company');
if(!$link){
    die('Connection error' . mysqli_connect_error());
}

$query="SELECT rollno,name,department,incharge,year,title,language,file FROM records";
 
$result= mysqli_query($link,$query);
$numrow= mysqli_num_rows($result);

if($numrow>0) {
    echo '<table class="dbresult">';
    echo '<tr>';
    echo '<th>Rollno</th>';
    echo '<th>Name</th>';
    echo '<th>Department</th>';
    echo '<th>Incharge</th>';
    echo '<th>Year</th>';
    echo '<th>Title</th>';
    echo '<th>Language</th>';
    
    echo '<th>Image</th>';
    echo '</tr>';


    while($row = mysqli_fetch_assoc($result)){

    
        echo '<tr>';
        echo '<td>'. $row['rollno'] .'</td>';
        echo '<td>'.$row['name'] .'</td>';
        echo '<td>'. $row['department'] .'</td>';
        echo '<td>'. $row['incharge'] .'</td>';
        echo '<td>'.$row['year'] .'</td>';
        echo '<td>'. $row['title'] .'</td>';
        echo '<td>'. $row['language'] .'</td>';
       
        echo '<td>'.$row['file']. '</td>';
        echo '</tr>';
    
    }
    echo '</table>';
}else{
    echo'Records Not Found';
}

?>
</body>
</html>