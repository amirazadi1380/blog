<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (isset($_POST['username'])){
        session_start();
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $conn = mysqli_connect("localhost","root","","blog");
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND type = 'admin' ";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['username'] = $username;
            header("Location: /blogs/admin/allBlogs.php");
        }
    }
    ?>
    <form action="" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>