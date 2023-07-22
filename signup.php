<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "flowkey";


// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email=$_POST['email'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];


$sql = "INSERT INTO registrationn (email, password, conpassword)
VALUES ('$email', '$password', '$conpassword')";


if ($conn->query($sql) === TRUE) {
echo "<script>alert('You have registered successfully')</script>";
echo "<script>location.replace('http://localhost/flowkey/connect_signup.php')</script>";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

?>