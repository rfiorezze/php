<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Id  = filter_input(INPUT_GET, "Id");

$update = DBExecute("DELETE FROM estatisticas where Id=$Id;");
	header("Location: ListarEstatisticas.php");
?>