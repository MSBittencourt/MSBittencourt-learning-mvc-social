<?php
session_start();

include('server.php');

$username=$_SESSION['username'];
$sql="SELECT * FROM users WHERE Username='$username'";
$result=mysqli_query($db,$sql) or die("Your query is not correct");
$row=mysqli_fetch_array($result);

?>
