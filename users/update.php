<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <form action="/blogs/users/controllers/update.php" method="post" enctype="multipart/form-data" >
        <input type="text" name="username" value=<?php echo $_SESSION['username']; ?>>
        <input type="file" name="profile" >
        <input type="submit">
    </form>
</body>
</html>