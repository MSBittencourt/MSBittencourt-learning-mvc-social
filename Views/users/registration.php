<?php
$title = 'Registration';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
</head>
<body>
<style>
*{
    text-align: center;
}
</style>
<h1><?php echo $title?></h1>
<form action="$_POST" method = 'POST' >

First Name: <input type="text" name="fname" id="firstname"><br>
Last Name: <input type="text" name="lname" id="lastname"><br>
Email: <input type="text" name="email" id="email"><br>
Password: <input type="text" name="password" id="password"><br>
Password Confirmation: <input type="text" name="confPassword" id="confPassword"><br>

</form>

</body>
</html>
