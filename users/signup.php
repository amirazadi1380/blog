<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../users/controllers/create.php" method="post" enctype="multipart/form-data" >
        <input type="text" placeholder="username..." name="username">
        <input type="password" placeholder="password..." name="password">
        <input type="file" name="profile">
        <input type="submit" value="signup">
    </form> 
</body>
</html>