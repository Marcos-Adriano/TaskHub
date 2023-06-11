<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="./css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <img src="./images/en.png" alt="logo" />
    </div>
    <div id="register-form">
        <img src="./images/321.png" alt="LogoForm">
        <section id="text-area">
            <h1 id="title">Sign up</h1>
        </section>
        <section id="form">
            <form action="register.php" method="POST" id="input-area" aria-autocomplete="none">
                <span>Your name:</span><br>
                <input type="text" id="first-name" name="name"><br><br>
                <span>Email:</span><br>
                <input type="email" id="email-input" name="email"><br><br>
                <span>Password:</span><br>
                <input id="password-input" type="password" name="passwordb"><br><br>
                <span>Confirm Password:</span><br>
                <input id="confirm-password-input" type="password"><br><br>
                <button id="submit-button">Submit</button>
            </form>

        </section>
    </div>
</body>

</html>

<?php

session_start();

try{
require 'Connection.php'; // Inclui o arquivo de conexão

$init = new Connection();
$db = $init->getConnection();

$sql = "INSERT INTO users(user_name, user_email, user_password) VALUES (?, ?, ?)";

$prepare = $db->prepare($sql);
$prepare->bindParam(1, $_POST['name']);
$prepare->bindParam(2, $_POST['email']);
$prepare->bindParam(3, $_POST['passwordb']);
$prepare->execute();

// Obtém o user_id do usuário inserido
$user_id = $db->lastInsertId();

$_SESSION['user_id'] = $user_id;

// Redireciona para a página desejada
header("Location: plandoit.php");
exit();

}catch(Exception $e){

echo ' ';

}

?>