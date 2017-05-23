<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Id  = filter_input(INPUT_GET, "Id");
$Sigla_Equipe  = filter_input(INPUT_GET, "Sigla_Equipe");
$CPF_Jogador  = filter_input(INPUT_GET, "CPF_Jogador");
$update = DBExecute("UPDATE equipes_jogador SET Sigla_Equipe='$Sigla_Equipe',CPF_Jogador='$CPF_Jogador' where Id=$Id");
	header("Location: ListarEquipesJogador.php");
?>