<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username"><br>
        <label>password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login"><br>
    </form>
</body>
</html>

<?php
    // isset() returns true if variable is declared and not null
    // empty() returns true if var is not declared, false, null


    foreach($_POST as $key=>$value){
        echo"{$key} = {$value} <br>";
    }


    // if(isset($_POST["login"])){
    //     $username=$_POST["username"];
    //     $password=$_POST["password"];
    //     if(empty($username)){
    //         echo"Username field is empty";
    //     }
    //     elseif(empty($password)){
    //         echo"Password is missing";
    //     }
    //     else{
    //         echo"Hello {$username}";
    //     }
    // }
    
?>