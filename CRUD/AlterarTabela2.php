<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Id = filter_input(INPUT_GET, "Id");
$Nome  = filter_input(INPUT_GET, "Nome");
$Pontos  = filter_input(INPUT_GET, "Pontos");
$Classificacao  = filter_input(INPUT_GET, "Classificacao");
$Jogos  = filter_input(INPUT_GET, "Jogos");
$Vitorias  = filter_input(INPUT_GET, "Vitorias");
$Derrotas  = filter_input(INPUT_GET, "Derrotas");
$Razao  = filter_input(INPUT_GET, "Razao");
$Id_Grupo  = filter_input(INPUT_GET, "Id_Grupo");
$Id_Campeonato  = filter_input(INPUT_GET, "Id_Campeonato");
$update = DBExecute("UPDATE tabela SET Nome='$Nome',Pontos=$Pontos,Classificacao=$Classificacao,Jogos=$Jogos,Vitorias=$Vitorias,Derrotas=$Derrotas,Razao=$Razao,Id_Grupo=$Id_Grupo,Id_Campeonato=$Id_Campeonato where Id=$Id");
	header("Location: ListarTabelas.php");
?>