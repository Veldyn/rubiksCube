<?php
session_start();
include 'connection.php';
$username = $_SESSION['username'];

if (isset($_POST['submit'])) {   // If the button is pressed
    $file = $_FILES['file'];

    // All the information about the file
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    // Separate the file and extension with explode
    $fileExt = explode('.', $fileName);

    // Get the extension of the file we just uploaded
    $fileActualExt = strtolower(end($fileExt));

    // Array of extensions allowed: common image extensions
    $allowed = array('pdf', 'PDF');


    if (in_array($fileActualExt, $allowed)) {              // If the extension is allowed

        if ($fileError === 0) {                            // If we have no errors with uploading the file

            if ($fileSize < 1000000) {                    // If the file is not too big                
                $fileNameNew = $username . "." . $fileActualExt;     // Create a new and unique file name            
                $fileDestination = '/var/www/personnelport.careers/resumes/' . $fileNameNew;       // Where we want to save the file
                move_uploaded_file($fileTmpName, $fileDestination);     // Actually saving the file
		header("Location: ../index.php?page=profile");
            } else {
                echo "The file is too big";
            }
        } else {
            echo "There was an error uploading the file";
        }
    } else {
        echo "Invalid File Type. Please upload a PDF";
    }
}
