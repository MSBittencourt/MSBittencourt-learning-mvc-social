<?php
session_start();

include('./Models/server.php');

$username=$_SESSION['username'];
$sql="DELETE FROM users WHERE UserName='$username'";
$result=mysqli_query($db,$sql);

?>