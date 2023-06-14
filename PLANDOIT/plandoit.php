<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./css/plandoit2.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="./images/logo-only.png" alt="logo">
                </span>

                <div class="text logo-text">
                    <span class="name">PLANDOIT</span>
                    <span class="profession">Plan and do it!</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#" class="menu-item" data-file="./new-task2.html">
                            <i class='bx bx-plus icon' ></i>
                            <span class="text nav-text">New Task</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-tag icon'></i>
                            <span class="text nav-text">Tags</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-cog icon' ></i>
                            <span class="text nav-text">Settings</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">About</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Donate</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="login.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <!-- <i class='bx bx-sun icon sun'></i> -->
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
    
    <div id="content">

    </div>
    
    <script src="./js/plandoit2.js"></script>
    <script src="./js/new-task.js"></script>

</body>
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
        $prepare->bindParam(7,$_POST['date']);
        $prepare->execute();
                
        return $prepare->rowCount();
        mysqli_close($connection); 
        return $id;

    }catch(Exception $e){
         echo ' ';
     }

 ?>