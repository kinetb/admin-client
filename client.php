<?php

require "connection.php";

$sql = "SELECT * FROM `info`";
$list = $conn->query($sql);
$fetch = $list->fetch_assoc();





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CLIENT</title>
</head>
<body>
<div class="logheader">
    <img src="image/profile.jpg" alt="" class="logo">
    </div>
    <h1>Hello <?php echo $fetch['username']?></h1>

    <a href="index.php" class="logoutadmin">LOG OUT</a>

</body>
</html>