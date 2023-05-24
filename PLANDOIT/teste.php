<!DOCTYPE html>
<html>
<head>
  <title>Exemplo de Estilização com CSS</title>
  <style>
    /* Estilos CSS para a tabela */
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h2>Tarefas</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Categoria</th>
      <th>ID do Usuário</th>
      <th>Status</th>
      <th>Descrição</th>
      <th>Data de Vencimento</th>
      <th>Data de Criação</th>
      <th>Data de Atualização</th>
    </tr>

    <?php
    // Seu código PHP para buscar os dados e exibi-los
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
        echo "<tr>";
        echo "<td>" . $row['task_id'] . "</td>";
        echo "<td>" . $row['task_name'] . "</td>";
        echo "<td>" . $row['category_id'] . "</td>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>" . $row['task_status'] . "</td>";
        echo "<td>" . $row['task_description'] . "</td>";
        echo "<td>" . $row['task_due_date'] . "</td>";
        echo "<td>" . $row['task_created_at'] . "</td>";
        echo "<td>" . $row['task_updated_at'] . "</td>";
        echo "</tr>";
    }
    ?>

  </table>

</body>
</html>
