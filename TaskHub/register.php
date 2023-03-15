<?php 

include ("connection.php"); //Inclui o arquivo de conexão

$name=$_POST['name']; //Cria uma variável linkada com o input com nome  " name "
$email=$_POST['email']; //Cria uma variável linkada com o input com nome  " email "
$password=$_POST['passwordb']; //Cria uma variável linkada com o input com nome  " password "

$sql= "INSERT INTO users(user_name,user_email,user_password)VALUES('$name','$email','$password') "; //Comando Sql pra implementar na tabela


if(mysqli_query($conexao,$sql)) { //Verifica se a operação funcionou 
    echo "Usuário cadastrado com sucesso";
} else {
    echo "Erro".mysqli_connect_error($conexao);
}

mysqli_close($conexao); //Acaba com a operação pra evitar erros
?>