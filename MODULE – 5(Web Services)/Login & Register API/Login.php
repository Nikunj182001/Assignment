<?php
header('Content-type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['userName']) && !empty($_POST['userPassword'])) {
        $userName = $_POST['userName'];
        $userPassword = $_POST['userPassword'];
        try {
            require 'DBConnect.php';
            // checking for valid user details 
            $SELECT__USER__DATA = "SELECT * FROM `users` WHERE username = '$userName'";

            $run = $conn->query($SELECT__USER__DATA);

            if (mysqli_num_rows($run) > 0) {
                $user__data = $run->fetch_object();
                if (password_verify($userPassword, $user__data->passwords)) {
                    $user__object = array(
                        "fullName" => $user__data->full_name,
                        "emailID" => $user__data->email_id,
                        "userName" => $user__data->username
                    );
                    http_response_code(200);
                    $server__response__success = array(
                        "code" => http_response_code(200),
                        "status" => true,
                        "message" => "User Verified",
                        "userData" => $user__object
                    );
                    echo json_encode($server__response__success);
                } else {
                    http_response_code(404);
                    $server__response__error = array(
                        "code" => http_response_code(404),
                        "status" => false,
                        "message" => "Opps!! Incorrect Login Credentials"
                    );
                    echo json_encode($server__response__error);
                }
            } else {
                http_response_code(404);
                $server__response__error = array(
                    "code" => http_response_code(404),
                    "status" => false,
                    "message" => "Opps!! Incorrect Login Credentials"
                );
                echo json_encode($server__response__error);
            }
        } catch (Exception $ex) {
            http_response_code(404);
            $server__response__error = array(
                "code" => http_response_code(404),
                "status" => false,
                "message" => "Opps!! Something Went Wrong! " . $ex->getMessage()
            );
            echo json_encode($server__response__error);
        }
    } else {
        http_response_code(404);
        $server__response__error = array(
            "code" => http_response_code(404),
            "status" => false,
            "message" => "Invalid API parameters! Please contact the administrator or refer to the documentation for assistance."
        );
        echo json_encode($server__response__error);
    }
} else {
    http_response_code(404);
    $server__response__error = array(
        "code" => http_response_code(404),
        "status" => false,
        "message" => "Bad Request"
    );
    echo json_encode($server__response__error);
}
