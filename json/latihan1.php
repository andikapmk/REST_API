<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ci4apps";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT*FROM orang";
$result = $conn->query($sql);
$data = $result->fetch_all();
$conn->close();

//json
$data1 = json_encode($data);

echo $data1;
