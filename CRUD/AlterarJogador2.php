<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$CPF  = filter_input(INPUT_GET, "CPF");
$Nome  = filter_input(INPUT_GET, "Nome");
$Funcao  = filter_input(INPUT_GET, "Funcao");
$Altura  = filter_input(INPUT_GET, "Altura");
$Nacionalidade  = filter_input(INPUT_GET, "Nacionalidade");
$DataNasc  = filter_input(INPUT_GET, "DataNasc");
$SiglaEquipe  = filter_input(INPUT_GET, "SiglaEquipe");
$CPF_Treinador  = filter_input(INPUT_GET, "CPF_Treinador");

$update = DBExecute("UPDATE jogador SET Nome='$Nome',Funcao='$Funcao',Altura=$Altura, Nacionalidade='$Nacionalidade',DataNascimento='$DataNasc',Sigla_Equipe='$SiglaEquipe',CPF_Treinador='$CPF_Treinador' where CPF='$CPF';");
	header("Location: ListarJogadores.php");
?>