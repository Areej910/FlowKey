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

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$course=$_POST['course'];
$date=$_POST['date'];

$sql = "INSERT INTO booking (name,email,phone,course,date) VALUES ('$name','$email', '$phone','$course','$date')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have booked successfully')</script>";
   echo "<script>location.replace('http://localhost/flowkey/connect_booking.php')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>