<?php 
$conn = mysqli_connect("localhost", "root", "", "blog");

function createBlog($topic,$text)
{
    session_start();
    $user_id = $_SESSION['user_id'];
    global $conn;
    $sql = "INSERT INTO blogs (topic,text,user_id) VALUES ('$topic','$text',$user_id)";
    mysqli_query($conn, $sql);
}
function like($user_id,$blog_id)
{
    $sql = "INSERT INTO likes (user_id,blog_id) VALUES ($user_id,$blog_id)";
    global $conn;
    if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM likes WHERE user_id = $user_id AND blog_id = $blog_id")) > 0){
        var_dump($user_id,$blog_id);
    }
    else{
        mysqli_query($conn,$sql);
    }
    
}