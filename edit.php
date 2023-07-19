<?php

require "connection.php";

$id = $_GET['id'];
$sql = "SELECT * FROM `info` WHERE id = '$id'";
$list = $conn->query($sql);
$fetch = $list->fetch_assoc();


if(isset($_POST['editbutton'])){;
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "UPDATE `info` SET `email`='$email',`username`='$username',`password`='$password' WHERE id = '$id'";
    $conn->query($sql);

    header("location:admin.php?id=" .$id);

}else if(isset($_POST['cancel'])){;
    header("location:admin.php?id=" .$id);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EDIT</title>
</head>
<body>
    <div class="header">
        <div class="container">
                <img src="image/profile.jpg" alt="" class="logo">
        </div>
    </div>

    <div class="edit">
        
    <form method="post" class="logform">
    <h1 class="edith1">Edit Account</h1>
        <div class="form">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="form-control" placeholder="Input new Email" name="email" required>
        </div>
        <div class="form">
        <label for="inputUsername" class="form-label">Username</label>
        <input type="text" class="form-control" id="form-control" placeholder="Input new Username" name="username" required>
        </div>
        <div class="form">
        <label for="inputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="form-control" placeholder="Input new Password" name="password" required>
        </div>
        <button type="submit" class="editbtn" name="editbutton" >Save</button>
        <a href="admin.php" class="linkedit" >Cancel</a>

    </form>

    </div>


</body>
</html>