<?php
if (isset($_GET['rollno'])) {
    // Get the rollno from the URL
    $rollno = $_GET['rollno'];

    // Connection to your database (you might need to modify this)
    $conn = mysqli_connect('localhost', 'root', '', 'company');
    if (!$conn) {
        die('Connection error: ' . mysqli_connect_error());
    }

    // Retrieve the file information from the database based on the rollno
    $sql = "SELECT file, title FROM records WHERE rollno = '$rollno'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $fileTitle = $row['title'];
            $fileName = $row['file'];

            // Define the path to the PDF files directory (adjust it as needed)
            $filePath = 'uploads/' . $fileName;

            // Check if the file exists
            if (file_exists($filePath)) {
                // Set appropriate headers for the file download
                header('Content-Type: application/pdf');
                header('Content-Disposition: attachment; filename="' . $fileTitle . '.pdf"');
                header('Content-Length: ' . filesize($filePath));

                // Output the file to the browser
                readfile($filePath);
                exit;
            } else {
                echo 'File not found.';
            }
        } else {
            echo 'Record not found for the provided rollno.';
        }
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
