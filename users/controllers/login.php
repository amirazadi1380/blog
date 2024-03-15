<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $conn = mysqli_connect("localhost", "root", "", "blog");
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($conn, $sql);
    var_dump(mysqli_num_rows($result));
    if (mysqli_num_rows($result) > 0) {

        $user = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        var_dump($_SESSION);
        header("Location: /blogs/users/main.php");
     
}

}
