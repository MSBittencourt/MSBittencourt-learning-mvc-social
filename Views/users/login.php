<?php
$title = 'Log in'


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $title?></title>
</head>
<style>
*{
    text-align: center;
}
</style>
<body>
<h2><?php echo $title ?></h2>

<form action="registration.php" method= 'POST'>
User Name or email <sup>*</sup>: <input type="text" name= 'name' id= 'name'><br>
Password <sup>*</sup>: <input type="text" name="password" id="password"><br>
<input type="submit" name='Login' value='Login' id='login'>
<input type="submit" name= 'Register' value='Register' id='register'>
</form>

    
</body>
</html>