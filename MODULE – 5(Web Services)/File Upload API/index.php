<?php

header("Acess-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods, Authorization");


$requertMethod = $_SERVER['REQUEST_METHOD'];

if ($requertMethod == 'POST') {

    $fileName = $_FILES['file']['name'];
    $tempPath = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];


    if (!empty($fileName)) {

        $upload_path = 'uploads/'; // set upload folder path 
        $server_url = "http://localhost/assignment/MODULE%205(Web%20Services)/File_Upload_API/uploads";

        // Generate random file name
        $fileExt = explode('.', $fileName);
        $fileActExt = strtolower(end($fileExt));
        $fileName = "WC-" . uniqid() . "." . $fileActExt;

        // valid file extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');

        // Include database connection file
        include("connection.php");

        // allow valid file formats
        if (in_array($fileActExt, $valid_extensions)) {
            //check file does not exist in the upload folder path
            if (!file_exists($upload_path . $fileName)) {
                // check file size '2MB'
                if ($fileSize < 2000000 && $fileError == 0) {
                    // move file from system temporary path to the upload folder path
                    if (move_uploaded_file($tempPath, $upload_path . $fileName)) {
                        // Insert Into table in database
                        $query = "INSERT INTO table_images (image) VALUES('$fileName')";
                        if ($con->query($query)) {
                            $response = [
                                'status' => true,
                                'message' => 'File Uploaded Successfully',
                                "url" => $server_url . "/" . $fileName
                            ];
                        }
                    } else {
                        $response = [
                            'status' => false,
                            'message' => "File couldn't be uploaded",
                        ];
                    }
                } else {
                    $response = [
                        'status' => false,
                        'message' => "Your file is too large, please upload 2 MB size",
                    ];
                }
            } else {
                $response = [
                    'status' => false,
                    'message' => "File already exists check upload folder",
                ];
            }
        } else {
            $response = [
                'status' => false,
                'message' => "Only JPG, JPEG, PNG, GIF, PDF, DOCX &amp; TEXT files are allowed",
            ];
        }

    } else {
        $response = [
            'status' => false,
            'message' => "Please select a file",
        ];
    }
} else {
    $response = [
        'status' => false,
        'message' => $requertMethod . ' Method now allowed',
    ];
}

echo json_encode($response);