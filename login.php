<?php

$dbhost="localhost";
$username="root";
$password="";
$db="flowkey";

$conn = new mysqli($dbhost,$username,$password,$db);

$email=$_POST['email'];
$password=$_POST['password'];
$sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if($row['email'] == $email && $row['password'] == $password) {
    echo "<script>alert('You have logged in successfully')</script>";
    echo "<script>location.replace('FlowKey.html')</script>";
}else {
   echo "<script>alert('Your email or password are wrong')</script>";
   echo "<script>location.replace('http://localhost/flowkey/connect_login.php')</script>";
   
}
    ?>
