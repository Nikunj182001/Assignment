<?php
require_once 'configurations.php';

$conn = new mysqli($DATABASE_SERVER_IP, $DATABASE_USER_NAME, $DATABASE_USER_PASSWORD, $DATABASE_NAME);

if ($conn) {
  // echo "Connected successfully";
}


