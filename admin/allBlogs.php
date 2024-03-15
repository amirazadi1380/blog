<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "blog");
    $sql = "SELECT * FROM blogs ";
    $result = mysqli_query($conn, $sql);
    $allBlogs = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $allBlogs[] = $row;
        }
    }    

    foreach($allBlogs as $blog){
    ?>
    <div>
        <h2><?php echo $blog['topic']; ?></h2>
        <h2><?php echo $blog['status']; ?></h2>
        <a href=<?php echo"/blogs/admin/verify.php/?blogId=$blog[blog_id]&q=acc"; ?>>تایید</a>
        <a href=<?php echo"/blogs/admin/verify.php/?blogId=$blog[blog_id]&q=deny"; ?>>رد</a>
    </div>
    <?php } ?>
</body>

</html>