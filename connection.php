<?php
$username = "root";
$password = "";
$server  = "localhost";
$db = "signup_db";

$con = mysqli_connect($server,$username,$password,$db);
if($con){
    //echo "Connect sucessfully";
    ?>
    <script>
        alert("Connect sucessfully");
    </script>
    <?php
}else{
    echo "Connection failed";
}
?>