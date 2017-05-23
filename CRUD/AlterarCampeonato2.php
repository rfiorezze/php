<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Id  = filter_input(INPUT_GET, "Id");
$Nome  = filter_input(INPUT_GET, "Nome");
$QtdeTimes  = filter_input(INPUT_GET, "QtdeTimes");
$update = DBExecute("UPDATE campeonato SET Nome='$Nome',QtdeTimes=$QtdeTimes where Id=$Id");
	header("Location: ListarCampeonato.php");
?>