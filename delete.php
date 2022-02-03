<?php
include 'connection.php';
$id = $_GET['id'];
$deletequery = "delete from users where id=$id";
$query = $con->query($deletequery);
header('location:display_users.php' );
?>