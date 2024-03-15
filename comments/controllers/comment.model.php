<?php 
$conn = mysqli_connect("localhost", "root", "", "blog");

function createComment($comment,$blog_id,$user_id)
{
    $user_id = $_SESSION['user_id'];
    $blog_id = $_GET['blogId'];
    global $conn;
    $sql = "INSERT INTO comments (comment,blog_id,user_id) VALUES ('$comment',$blog_id,$user_id)";
    mysqli_query($conn, $sql);
}
function like (){
    
    global $conn;
    $sql = "UPDATE comments";
    mysqli_query($conn, $sql);

}