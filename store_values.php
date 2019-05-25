<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webregistration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$yourName = $conn->real_escape_string($_POST['name']);
$yourEmail = $conn->real_escape_string($_POST['email']); 
$sql = "INSERT INTO trial1 (Name, Email) VALUES ('".$yourName."', '".$yourEmail."')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
