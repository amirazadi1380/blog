<?php 
session_start();
$user_id = $_SESSION['user_id'];
$conn = mysqli_connect("localhost","root","","blog");
$sql = "UPDATE users SET isDeleted = 'true' WHERE user_id = $user_id";
mysqli_query($conn,$sql);
header("Location: /blogs/users/signup.php");