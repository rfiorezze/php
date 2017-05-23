<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Id  = filter_input(INPUT_GET, "Id");
$Sigla_Equipe  = filter_input(INPUT_GET, "Sigla_Equipe");
$Id_Campeonato  = filter_input(INPUT_GET, "Id_Campeonato");
$update = DBExecute("UPDATE equipes_campeonatos SET Sigla_Equipe='$Sigla_Equipe',Id_Campeonato=$Id_Campeonato where Id=$Id");
	header("Location: ListarEquipesCampeonatos.php");
?>