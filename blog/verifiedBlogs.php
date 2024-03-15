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
    var_dump($_SESSION['username']);
    $conn = mysqli_connect("localhost", "root", "", "blog");
    $sql = "SELECT * FROM blogs";
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
        <?php echo $blog['topic']; ?>
        <?php
        $likes_length = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM likes WHERE blog_id = $blog[blog_id] "));
        echo $likes_length;
        ?>
        <form action=<?php echo"/blogs/comments/controllers/create.php/?blogId=$blog[blog_id]" ?> method="post">
            <input type="text" name="comment">
            <input type="submit" value="comment">
        </form>
        <a href=<?php echo "/blogs/comments/comments.php/?blogId=$blog[blog_id]"; ?>>comments</a>
        <a id="like" href=<?php echo "/blogs/blog/controllers/like.php/?blogId=$blog[blog_id]"; ?>>🩷</a>
    </div>
    <?php } ?>

</body>

</html>