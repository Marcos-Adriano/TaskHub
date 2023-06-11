<?php


class Connection
{

   
    private $connection;

    function __construct()
    {
        try {

            $this->connection = new PDO('mysql:host=localhost;dbname=task_manager', 'root', '');
        } catch (Exception $e) {

            echo $e->getMessage();

class Connection
{
    protected $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=task_manager', 'root', '');
        } catch (PDOException $e) {
            echo 'Erro de conexão: ' . $e->getMessage();
            die();
        }
    }

    public function register()
    {
        $sql = "INSERT INTO users(user_name,user_email,user_password) VALUES(?,?,?)";
        
        $prepare=$this->connection->prepare($sql);

        $prepare->bindParam(1,$_POST['name']);  
        $prepare->bindParam(2,$_POST['email']);  
        $prepare->bindParam(3,$_POST['passwordb']);  
        $prepare->execute();

        
        return $prepare->rowCount();
         
    }
    
    public function plandoit()
    {
        $sql = 'INSERT INTO tasks(task_id, task_name, category_id, user_id, task_status, task_description, task_due_date)VALUES(?,?,?,?,?,?,?)';
        
        $teste=Null;
        $teste2='text2';
        $teste3='1';
        $teste4='1';
        $teste5='0';
        $teste6='text4';
        $teste7=NULL;

        $prepare=$this->connection->prepare($sql);

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
    }

    public function login()
    {

        $sql = "SELECT * FROM users WHERE user_email=? AND user_password=?";

        $prepare=$this->connection->prepare($sql);
        $prepare->bindParam(1,$_POST['userEmail']);
        $prepare->bindParam(2,$_POST['userPassword']);
        $prepare->execute();

        $result=$prepare->fetch(PDO::FETCH_ASSOC);
        $result2=$result['user_id'];

        if($result != null){
       
        foreach($result as $key=>$value){

            echo $key.": ".$value."<br>";

        }

        }else{

        echo "Usuário não encontrado";
        
        }
        echo "<hr>";
        
        echo $result2;
      

    }
}

    public function getConnection()
    {
        return $this->connection;
    }
}

?>
