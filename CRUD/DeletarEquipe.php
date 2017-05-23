<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Sigla  = filter_input(INPUT_GET, "Sigla");

$update = DBExecute("DELETE FROM equipe where Sigla='$Sigla';");
	header("Location: ListarEquipes.php");
?>