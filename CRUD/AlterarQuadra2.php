<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Id  = filter_input(INPUT_GET, "Id");
$Largura  = filter_input(INPUT_GET, "Largura");
$Altura  = filter_input(INPUT_GET, "Altura");
$update = DBExecute("UPDATE quadra SET Largura=$Largura,Altura=$Altura where Id=$Id");
	header("Location: ListarQuadras.php");
?>