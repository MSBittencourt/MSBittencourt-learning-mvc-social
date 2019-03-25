<?php
$title = 'Registration'

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
Location: <input type="text" name="location" id="location"><br>
Age: <input type="number" name="age" id="age"><br>
Website: <input type="text" name="website" id="website"><br>
BIO: <input type="text" name="bio" id="bio"><br>
Gender: <input type="radio" value= 'female'name="gender" id="gender">Female
<input type="radio" value= 'male' name="gender" id="gender">Male
<input type="radio" value= 'other' name="gender" id="gender">Other <br>
<input type="submit" name= 'Register' value='Register' id='register' >



</form>
    
</body>
</html>