<?php
require_once(dirname(__FILE__) . "/users.model.php");
session_start();
$user_id = $_SESSION['user_id'];
$newUsername = $_POST['username'];
if (isset($_FILES)){
    $newProfile = $_FILES['profile']['name'];
}
move_uploaded_file($_FILES['profile']['tmp_name'],"../profiles/".$_FILES['profile']['name']);
updateUser($user_id,$newUsername,$newProfile);