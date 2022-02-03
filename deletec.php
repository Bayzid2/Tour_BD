<?php
include 'connection.php';
$id = $_GET['id'];
$deletequery = "delete from contact where id=$id";
$query = $con->query($deletequery);
header('location:contact_info.php' );
?>