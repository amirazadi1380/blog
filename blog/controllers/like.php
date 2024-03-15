<?php
require_once(dirname(__FILE__) . "/blog.model.php");
session_start();
$blog_id = $_GET['blogId'];
$user_id = $_SESSION['user_id'];
like($user_id,$blog_id);
header("Location: /blogs/blog/verifiedBlogs.php");
