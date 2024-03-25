<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "flower_survey";

// creating the connection
$conn = new mysqli($servername, $username, $password, $db);

// check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}