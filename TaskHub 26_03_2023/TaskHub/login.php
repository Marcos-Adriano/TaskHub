<?php

require 'Connection.php'; //Inclui o arquivo de conexão

$init= new Connection();

$init->login();

include('plandoit.php');

?>
