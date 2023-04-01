<?php 

$hostname= "localhost"; //Nome do Host
$usuario= "root"; //Usuário 
$senha=""; //Senha
$bancodedados= "task_manager"; //Nome do Banco 


$conexao= mysqli_connect($hostname,$usuario,$senha,$bancodedados); //Variável que faz a conexão com o banco

if(!$conexao){  // Verificar se a conexão está funcionando ou não
die("Houve um erro".mysqli_connect_error());
}
else{
echo "Conectado ao Banco de Dados";
}

?>