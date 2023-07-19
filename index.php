<?php

require "connection.php";

if(isset($_POST['loginbutton'])){;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `info` WHERE email = '$email' AND password = '$password'";
    $list = $conn->query($sql);
    $fetch = $list->fetch_assoc();
    if($list->num_rows){

    if($fetch['role'] == 'admin'){
    header("location: admin.php");
    }
    else{
        header("location: client.php");
    }

}
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>newcrud1</title>
</head>
<body>
    <section id="index">
    <div class="logheader">
    <img src="image/profile.jpg" alt="" class="logo">
    </div>
    <div class="hello">
        <h1>HENLO GAIS</h1>
        <button class="logbutton" id="logbutton"> LOG IN</button>
        <button class="signbutton" id="signbutton"> SIGN IN</button>

    </div>
    <div class="log">

   <form method="post" class="logform">
        <h2 class="h2log">LOG IN</h2>
        <div class="form">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="form-control" placeholder="Enter your Email" name="email" required>
        </div>
        <div class="form">
            <label for="inputPassword" class="form-label" id="form-label">Password</label>
            <input type="password" class="form-control" id="form-control" placeholder="Enter your Password" name="password" required>
        </div> <br>
        <button type="submit" name="loginbutton" class="loginbtn" id="loginbtn">Log in</button>
        <a href="index.php" class="logindexlink">Back</a>
        </form>


    </div>













<?php

require "connection.php";

if(isset($_POST['signinbutton'])){;

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `info`(`email`, `username`, `password`) VALUES ('$email','$username','$password')";
    $conn->query($sql);
    
    header("location: index.php");
}






?>










                    <!-- Sign in -->


    <div class="sign">
    <form method="post" class="signform">
        <h2 class="h2sign">SIGN IN</h2>
        <div class="formsign">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="form-control" placeholder="Enter your Email" name="email" required>
        </div>
        <div class="formsign">
            <label for="inputUsername" class="form-label">Username</label>
            <input type="text" class="form-control" id="form-control" placeholder="Enter Username" name="username" required>
        </div>
        <div class="formsign">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="form-control" placeholder="Create Password" name="password" required>
        </div> <br>
        <button type="submit" class="signinbtn" name="signinbutton">Sign in</button>
        <a href="index.php" class="signindexlink">Back</a>
        
        
    </form>
    </div>

    </section>

<script src="main.js"></script>
</body>
</html>