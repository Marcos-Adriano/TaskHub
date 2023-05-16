<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plandoit HUB</title>
    <link rel="stylesheet" href="./css/plandoit.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">

    <script src="./js/plandoit.js" defer></script>
</head>

<body>

    <div class="header" id="header">
        <button onclick="toggleSidebar()" class="btn-icon-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <div class="logo_header">
            <img src="./images/123.png" alt="imagem-logo" id="img-logo-header">
        </div>
        <div class="navigation-bar" id="navigation-bar">
            <button onclick="toggleSidebar()" class="btn-icon-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x"
                    viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
            <a href="#">Taskhub</a>
            <a href="#">Tags</a>
            <a href="#">About</a>

            <button id="abrir-formulario">Nova Tarefa</button>

            <div id="formulario" style="display: none;">
                <h2>Nova Tarefa</h2>
                <form action="plandoit.php" method="POST">
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="task">
                    <br>
                    <label for="descricao">Descrição:</label>
                    <textarea id="descricao" name="description"></textarea>
                    <br>
                    <button type="submit" id="salvar">Salvar</button> <!--onclick="showConfirm()" -->
               <!--<button type="submit" id="cancelar">Cancelar</button> -->
                </form>
            </div>
        </div>

    </div>
    </div>
    <div tabindex='0' onclick="closeSidebar()" class="content" id="content">
        <h1>CENTRAL DE TASKS</h1>
        <ul id="lista-tarefas"></ul>
    </div>

</body>
<script src="./js/add-task.js" defer></script>

</html>


<?php 

session_start();
 
 try{

    
    include('Connection.php'); //Inclui o arquivo de conexão
    
     $init= new Connection();
     $db = $init->getConnection();
    
        $sql = 'INSERT INTO tasks(task_id, task_name, category_id, user_id, task_status, task_description, task_due_date)VALUES(?,?,?,?,?,?,?)';
        
        $id=$_SESSION['user_id'];

        $teste=Null;
        $teste2='text2';
        $teste3='1';
        $teste4=$id;
        $teste5='0';
        $teste6='text4';
        $teste7=NULL;
        
        $prepare=$db->prepare($sql);

        $prepare->bindParam(1,$teste);
        $prepare->bindParam(2,$_POST['task']);
        $prepare->bindParam(3,$teste3);
        $prepare->bindParam(4,$teste4);
        $prepare->bindParam(5,$teste5);
        $prepare->bindParam(6,$_POST['description']);
        $prepare->bindParam(7,$teste7);
        $prepare->execute();
                
        return $prepare->rowCount();
        mysqli_close($connection); 
        return $id;

    }catch(Exception $e){
         echo ' ';
     }

 ?>