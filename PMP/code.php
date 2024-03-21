<?php
if (isset($_POST['save'])) {
    // Define the upload directory and allowed file types
    $uploadDir = 'uploads/'; // Create a directory named "uploads" in your project root
    $allowedFileTypes = ['pdf'];

    // Process the form data
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $incharge = $_POST['incharge'];
    $year = $_POST['year'];
    $title = $_POST['title'];
    $language = $_POST['language'];

    // Check if the file was uploaded without errors
    if ($_FILES['pdf_file']['error'] === 0) {
        $fileExtension = pathinfo($_FILES['pdf_file']['name'], PATHINFO_EXTENSION);

        // Check if the file extension is allowed
        if (in_array($fileExtension, $allowedFileTypes)) {
            // Generate a unique filename
            $fileName = uniqid() . '_' . $_FILES['pdf_file']['name'];

            // Set the destination path for the uploaded file
            $destination = $uploadDir . $fileName;

            // Move the uploaded file to the destination
            if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $destination)) {
                // Connection to your database (you might need to modify this)
                $conn = mysqli_connect('localhost', 'root', '', 'company');
                if (!$conn) {
                    die('Connection error: ' . mysqli_connect_error());
                }

                // Insert data into your database
                $sql = "INSERT INTO records (rollno, name, department, incharge, year, title, language, file) 
                        VALUES ('$rollno', '$name', '$department', '$incharge', '$year', '$title', '$language', '$fileName')";

                if (mysqli_query($conn, $sql)) {
                    // Display a success message using JavaScript and redirect
                    echo '<script>
                        alert("Data and file uploaded successfully.");
                        window.location.href = document.referrer; // Redirect to the previous page
                    </script>';
                    exit; // Stop further execution to prevent other content from displaying
                } else {
                    echo 'Error: ' . mysqli_error($conn);
                }

                mysqli_close($conn);
            } else {
                echo 'Error uploading the file.';
            }
        } else {
            echo 'Invalid file type. Only PDF files are allowed.';
        }
    } else {
        echo 'File upload error: ' . $_FILES['pdf_file']['error'];
    }
}
?>
