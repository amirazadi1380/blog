<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['user_id'])){

        $user_id = $_SESSION['user_id'];
        $conn = mysqli_connect("localhost", "root", "", "blog");
        $sql = "SELECT * FROM users WHERE user_id = $user_id ";
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_assoc($result);
        var_dump($user);
    }
    ?>
    <form action="/blogs/users/controllers/update.php"></form>
    <a href="login.php">ورود</a>
    <a href="signup.php">ثبت نام</a>
    <a href="/blogs/users/controllers/logout.php">خروج</a>
    <a href="/blogs/users/controllers/delete.php">حذف</a>
    <a href="/blogs/users/update.php">تغییر</a>
    <a href="/blogs/blog/blogForm.php">بلاگ</a>
    <a href="/blogs/blog/verifiedBlogs.php">لیست</a>
</body>

</html>