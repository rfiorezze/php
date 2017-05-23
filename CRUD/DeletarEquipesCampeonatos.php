<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Id  = filter_input(INPUT_GET, "Id");

$update = DBExecute("DELETE FROM equipes_campeonatos where Id='$Id';");
	header("Location: ListarEquipesCampeonatos.php");
?>