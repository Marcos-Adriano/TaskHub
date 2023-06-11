<?php
<<<<<<< HEAD

require 'Connection.php'; //Inclui o arquivo de conexão

$init= new Connection();

$init->login();



?>
=======
session_start();

require 'Connection.php'; // Inclui o arquivo de conexão

$init = new Connection();
$db = $init->getConnection();

if (isset($_POST['submit-button'])) {
    $sql = "SELECT * FROM users WHERE user_email=? AND user_password=?";
    $prepare = $db->prepare($sql);
    $prepare->bindParam(1, $_POST['userEmail']);
    $prepare->bindParam(2, $_POST['userPassword']);
    $prepare->execute();

    

    $result = $prepare->fetch(PDO::FETCH_ASSOC);
    $result2 = $result['user_id'];
    $_SESSION['user_id'] = $result2;

   /* if($result != null){  //Debugador 
       
        foreach($result as $key=>$value){

            echo $key.": ".$value."<br>";

        }

        }else{

        echo "Usuário não encontrado";
        
        } */


    // Redireciona para a página desejada
    header("Location: plandoit.php");
    exit(); // Certifique-se de terminar a execução do script após o redirecionamento
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Sign in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <img src="./images/en.png" alt="logo" />
    </div>
    <div id="login-form">
        <img src="./images/321.png" alt="LogoForm">
        <section id="text-area">
            <h1>Sign in</h1>
        </section>
        <form action="login.php" method="POST" id="input-area">
            <span>Email:</span><br>
            <input id="user-input" type="text" name="userEmail"><br>
            <span>Password:</span><br>
            <input id="password-input" type="password" name="userPassword"><br>
            <a href="#">Forgot your password?</a>
            <button type="submit" name="submit-button" id="submit-button">Submit</button>
        </form>
    </div>
</body>

</html>

>>>>>>> PHP-BRANCH
