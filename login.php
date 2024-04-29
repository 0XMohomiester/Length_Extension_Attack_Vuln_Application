<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <form action="" method="POST">
            <label for="username">username</label>
            <br>
            <input type="text" name="username" id="username" value="" required>
            <br>
            <label for="password">password</label>
            <br>
            <input type="password" name="password" id="password" value="" required>
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>

<?php 
include 'sign.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin"){

    if($password == "admin"){

        $cookie = "user=$username&role=admin";
        $signature = sign($cookie);
        setcookie("session", bin2hex($cookie));
        setcookie("signature", $signature);
        header("Location: index.php");
    }
    else{
        echo "Bad Username or Password";
    }
}
elseif($username == "auditor"){
    if($password == "auditor"){
        $cookie = "user=$username&role=auditor";
        $signature = sign($cookie);
        setcookie("session", bin2hex($cookie));
        setcookie("signature", $signature);
        header("Location: index.php");
    }
    else{
        echo "Bad Username or Password";
    }
}
