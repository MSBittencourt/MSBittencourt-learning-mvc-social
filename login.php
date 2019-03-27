<?php
$title = 'Log in';

include('server.php');
if (isset($_POST['createaccount'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        if (!DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {
            if (strlen($username) >= 3 && strlen($username) <= 32) {
                    if (preg_match('/[a-zA-Z0-9_]+/', $username)) {
                            if (strlen($password) >= 6 && strlen($password) <= 60) {
                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    DB::query('INSERT INTO users VALUES (\'\', :username, :password, :email)', array(':username'=>$username, ':password'=>password_hash($password, PASSWORD_BCRYPT), ':email'=>$email));
                                    echo "Success!";
                            } else {
                                    echo 'Invalid email!';
                            }
                    } else {
                            echo 'Invalid password!';
                    }
                    } else {
                            echo 'Invalid username';
                    }
            } else {
                    echo 'Invalid username';
            }
    } else {
            echo 'Username already in use!';
    }
}
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

<form action="registration.php" method= 'POST' autocomplete= "off">
User Name or email : <input type="text" name= 'name' id= 'name' required ><br>
Password : <input type="text" name="password" id="password" required ><br>
<input type="submit" name='Login' value='Login' id='login'>
<input type="submit" name= 'Register' value='Register' id='register'>
</form>


</body>
</html>
