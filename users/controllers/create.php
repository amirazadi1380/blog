<?php 
require_once(dirname(__FILE__) . "/users.model.php");
$username = $_POST['username'];
$password = md5($_POST['password']);
$profile_src = $_FILES['profile']['name'];
move_uploaded_file($_FILES['profile']['tmp_name'],"../profiles/".$_FILES['profile']['name']);
createUser($username,$password,$profile_src);
header("Location: ../login.php");
