<?php

require 'Connection.php'; //Inclui o arquivo de conexão

$init= new Connection();

$init->register();

include('plandoit.php');
?>
