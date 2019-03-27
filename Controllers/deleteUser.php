<?php
session_start();

include('server.php');

$username=$_SESSION['username'];
$sql="DELETE FROM users WHERE UserName='$username'";
$result=mysqli_query($db,$sql);

?>