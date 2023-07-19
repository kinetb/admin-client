<?php

require "connection.php";

if(isset($_POST['delete'])){
$id = $_POST['erase'];
$sql = "DELETE FROM `info` WHERE id = '$id'";
$conn->query($sql);



header("location:admin.php");
}

?>
