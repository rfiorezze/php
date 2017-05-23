<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$CPF  = filter_input(INPUT_GET, "CPF");

$update = DBExecute("DELETE FROM jogador where CPF='$CPF';");
	header("Location: ListarJogadores.php");
?>