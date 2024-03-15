<?php
$conn = mysqli_connect("localhost", "root", "", "blog");

function createUser($username, $password, $profile_src)
{
    global $conn;
    $sql = "INSERT INTO users (username,password,profile_src) VALUES ('$username','$password','$profile_src')";
    mysqli_query($conn, $sql);
}

function updateUser($user_id,$newUsername,$newProfile){
    global $conn;
    $sql = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($result);
    if ($newUsername == ''){
        $username = $user['username'];
    }
    else{
        $username = $newUsername;
    }
 
    if ($newProfile == ''){
        $profile_src = $user['profile_src'];
    }
    else{
        $profile_src = $newProfile;
    }
 
    $update_sql = "UPDATE users SET username = '$username' , profile_src = '$profile_src' WHERE user_id = $user_id";
    $_SESSION['username'] = $username;
    mysqli_query($conn,$update_sql);
    var_dump($user);
}