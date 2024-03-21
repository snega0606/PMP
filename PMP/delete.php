<?php
$link = mysqli_connect('localhost', 'root', '', 'company');

if (!$link) {
    die('Connection error' . mysqli_connect_error());
}

if (isset($_GET['rollno'])) {
    $rollno = $_GET['rollno'];

    // Prepare and execute the DELETE query
    $query = "DELETE FROM records WHERE rollno = ?";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, 's', $rollno);

    if (mysqli_stmt_execute($stmt)) {
        $successMessage = "Record with Rollno $rollno has been deleted.";

        // JavaScript to show the success message in a popup
        echo "<script>
            alert('$successMessage');
            window.location.href = 'academic.php'; // Redirect to the same page
        </script>";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($link);
?>
