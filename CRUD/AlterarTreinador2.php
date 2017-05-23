<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$CPF  = filter_input(INPUT_GET, "CPF");
$Nome  = filter_input(INPUT_GET, "Nome");
$Sexo  = filter_input(INPUT_GET, "Sexo");
$Altura  = filter_input(INPUT_GET, "Altura");
$Nacionalidade  = filter_input(INPUT_GET, "Nacionalidade");
$SiglaEquipe  = filter_input(INPUT_GET, "SiglaEquipe");


$update = DBExecute("UPDATE treinador SET Nome='$Nome',Sexo='$Sexo',Altura=$Altura, Nacionalidade='$Nacionalidade',Sigla_Equipe='$SiglaEquipe' where CPF='$CPF';");
	header("Location: ListarTreinadores.php");
?>