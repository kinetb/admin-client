<?php

require "connection.php";

$sql = "SELECT * FROM `info`";
$table = $conn->query($sql);
$content = $table->fetch_assoc();





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
    <h1>Hello <?php echo $content['username']?></h1>

    <a href="index.php" class="logoutadmin">LOG OUT</a>

</body>
</html>