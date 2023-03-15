<?php 

include ("connection.php"); //Inclui o arquivo de conexão

$task=$_POST['task']; //Cria uma variável linkada com o input com nome " task "
$description=$_POST['description']; //Cria uma variável linkada com o input com nome " description "


$sql= "INSERT INTO tasks(task_name,task_description)VALUES('$task','$description')"; //Comando Sql pra implementar na tabela


if(mysqli_query($conexao,$sql)) {
    echo "Usuário cadastrado com sucesso";
} else {
    echo "Erro".mysqli_connect_error($conexao);
}

mysqli_close($conexao); //Acaba com a operação pra evitar erros


?>