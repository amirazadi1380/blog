<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $blog_id = $_GET['blogId'];
    $conn = mysqli_connect("localhost","root","","blog");
    $sql = "SELECT * FROM comments WHERE blog_id = $blog_id"; 
    $result = mysqli_query($conn,$sql);
    $allComments = [];
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $allComments[] = $row;
        }
    }
    else{
        echo 'no comment';
    }
    foreach($allComments as $comment){
        $username = mysqli_fetch_assoc(mysqli_query($conn,"SELECT username FROM users WHERE user_id = $comment[user_id] "))['username'];
    ?>
    <h3><?php echo $username; ?></h3>
    <h3><?php echo $comment['comment']; ?></h3>
    <?php } ?>
</body>
</html>