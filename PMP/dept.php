
<?php
$con = mysqli_connect("localhost", "root", "", "company");
$s = mysqli_query($con, "SELECT DISTINCT department FROM records");
?>
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
    <title>search data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5"><center>
        <form method="post"> 
           <!-- <input type="text" placeholder="search data" name="search">-->
           

<select name="search" placeholder="Select your department">
    <?php
    while ($r = mysqli_fetch_array($s)) {
    ?>
        <option><?php echo $r['department']; ?></option>
    <?php
    }
    ?>
</select>




            <button class="btn btn-dark btn-sm" name="submit" >Search</button><br>
<br>
            <center><a href="profile.php" class="fcc-btn">Back</a><br>
  <br></center>
        </form></center>
        <div class="container my-5">
            <table class="table">
                <?php
                if(isset($_POST['submit'])){
                    $search=$_POST['search'];

                    $sql="select * from records where department like '%$search%'";
                    $result=mysqli_query($con,$sql);
                    if($result){
                    if(mysqli_num_rows($result)>0){
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
                        while($row=mysqli_fetch_assoc($result)){
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
                    
                    } 



                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>