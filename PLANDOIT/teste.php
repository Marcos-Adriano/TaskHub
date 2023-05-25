<?php

session_start();

require 'Connection.php'; // Inclui o arquivo de conexão

$init = new Connection();
$db = $init->getConnection();

// ID específico a ser consultado
$id = $_SESSION['user_id']; // Altere o valor do ID conforme necessário

$sql = "SELECT * FROM tasks WHERE user_id = :id";
$prepare = $db->prepare($sql);
$prepare->bindParam(':id', $id);
$prepare->execute();

$rows = $prepare->fetchAll(PDO::FETCH_ASSOC);

// Exibir os resultados
foreach ($rows as $row) {
    echo "ID: " . $row['task_id'] . "<br>";
    echo "Nome: " . $row['task_name'] . "<br>";
    echo "ID: " . $row['category_id'] . "<br>";
    echo "Nome: " . $row['user_id'] . "<br>";
    echo "ID: " . $row['task_status'] . "<br>";
    echo "Nome: " . $row['task_description'] . "<br>";
    echo "Nome: " . $row['task_due_date'] . "<br>";
    echo "ID: " . $row['task_created_at'] . "<br>";
    echo "Nome: " . $row['task_updated_at'] . "<br>";
    // Adicione aqui os outros campos da tabela que deseja exibir
    echo "<br>";
}

?>