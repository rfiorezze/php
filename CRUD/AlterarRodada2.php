<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Id  = filter_input(INPUT_GET, "Id");
$Id_Campeonato  = filter_input(INPUT_GET, "Id_Campeonato");
$update = DBExecute("UPDATE rodada SET Id_Campeonato=$Id_Campeonato where Id=$Id");
	header("Location: ListarRodadas.php");
?>