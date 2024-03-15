<?php
$blog_id = $_GET['blogId'];
$conn = mysqli_connect("localhost", "root", "", "blog");
if (isset($_GET['blogId'])) {
    if ($_GET['q'] == 'acc') {
        $sql = "UPDATE blogs SET status = '1' WHERE blog_id = $blog_id ";
        mysqli_query($conn, $sql);
        header("Location: /blogs/admin/allBlogs.php");
    } else {
        $sql = "UPDATE blogs SET status = '-1' WHERE blog_id = $blog_id";
        mysqli_query($conn, $sql);
        header("Location: /blogs/admin/allBlogs.php");
    }
}
