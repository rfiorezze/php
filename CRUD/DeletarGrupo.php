<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Id  = filter_input(INPUT_GET, "Id");

$update = DBExecute("DELETE FROM grupo where Id='$Id';");
	header("Location: ListarGrupos.php");
?>