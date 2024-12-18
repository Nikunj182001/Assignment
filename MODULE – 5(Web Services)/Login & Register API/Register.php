<?php
header('content-type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !empty($_POST['fullName']) && !empty($_POST['phoneNumber']) && !empty($_POST['emailID'])
        && !empty($_POST['userName']) && !empty($_POST['userPassword'])
    ) {
        $fullName = $_POST['fullName'];
        $phoneNumber = $_POST['phoneNumber'];
        $emailID = $_POST['emailID'];
        $userName = $_POST['userName'];
        $userPassword = $_POST['userPassword'];
        try {
            require 'DBConnect.php';
            // check for duplicate user 
            // here I am check for user email id for the same 
            $SELECT__USER__SQL = "SELECT * FROM `users` WHERE email_id='$emailID'";
            $run = $conn->query($SELECT__USER__SQL);

            if ($run->num_rows > 0) {
                http_response_code(404);
                $server__response__error = array(
                    "code" => http_response_code(404),
                    "status" => false,
                    "message" => "This user is already registered."
                );
                echo json_encode($server__response__error);
            } else {
                // insert/add new user details
                // encrypt user password 
                $password__hash = password_hash($userPassword, PASSWORD_DEFAULT);

                $fullName = $_POST['fullName'];
                $phoneNumber = $_POST['phoneNumber'];
                $emailID = $_POST['emailID'];
                $userName = $_POST['userName'];
                $userPassword = $password__hash;

                // insert data into the database
                $SQL__INSERT__QUERY = "INSERT INTO users(full_name,phone_number,email_id,username,passwords) VALUES(
                                                        '$fullName',
                                                        '$phoneNumber',
                                                        '$emailID',
                                                        '$userName',
                                                        '$userPassword'
                                                    )";
                $run = $conn->query($SQL__INSERT__QUERY);
                if ($run) {
                    $server__response__success = array(
                        "code" => http_response_code(200),
                        "status" => true,
                        "message" => "User successfully created."
                    );
                    echo json_encode($server__response__success);
                } else {
                    http_response_code(404);
                    $server__response__error = array(
                        "code" => http_response_code(404),
                        "status" => false,
                        "message" => "Failed to create user. Please try again."
                    );
                    echo json_encode($server__response__error);
                }
            }
        } catch (Exception $ex) {
            http_response_code(404);
            $server__response__error = array(
                "code" => http_response_code(404),
                "status" => false,
                "message" => "Opps!! Something Went Wrong! " . $ex->getMessage()
            );
            echo json_encode($server__response__error);
        } // end of try/catch
    } else {
        http_response_code(404);
        $server__response__error = array(
            "code" => http_response_code(404),
            "status" => false,
            "message" => "Invalid API parameters! Please contact the administrator or refer to the documentation for assistance."
        );
        echo json_encode($server__response__error);
    } // end of Parameters IF Condition
} else {
    http_response_code(404);
    $server__response__error = array(
        "code" => http_response_code(404),
        "status" => false,
        "message" => "Bad Request"
    );
    echo json_encode($server__response__error);
}