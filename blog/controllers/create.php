<?php 
require_once(dirname(__FILE__) . "/blog.model.php");
$text = $_POST['text'];
$topic = $_POST['topic'];
createBlog($topic,$text);


