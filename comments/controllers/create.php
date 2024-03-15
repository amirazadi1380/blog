<?php 
session_start();
require_once(dirname(__FILE__) . "/comment.model.php");
$comment = $_POST['comment'];
$user_id = $_SESSION['user_id'];
$blog_id = $_GET['blogId'];
createComment($comment,$blog_id,$user_id);
header("Location: /blogs/blog/verifiedBlogs.php");
