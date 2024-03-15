<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost","root","","blog");
    $sql = "SELECT * FROM users WHERE isDeleted = 'false' ";
    $result = mysqli_query($conn,$sql);
    $allusers = [];
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $allusers[] = $row;
        }
    }
    foreach($allusers as $user){

    
    ?>
    <h1><?php echo $user['username']; ?></h1>
    <img style="width: 100px;" src=<?php echo "./profiles/".$user['profile_src']; ?> alt="profile">

<?php } ?>
</body>
</html>