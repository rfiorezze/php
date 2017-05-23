<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';
$Id = filter_input(INPUT_GET, "Id");
$Nome  = filter_input(INPUT_GET, "Nome");
$UF  = filter_input(INPUT_GET, "UF");
$Cidade= filter_input(INPUT_GET, "Cidade");
$Rua  = filter_input(INPUT_GET, "Rua");
$Numero  = filter_input(INPUT_GET, "Numero");
$Id_Quadra  = filter_input(INPUT_GET, "Id_Quadra");
$update = DBExecute("UPDATE ginasio SET Nome='$Nome',UF='$UF',Cidade='$Cidade',Rua='$Rua',Numero=$Numero,Id_Quadra=$Id_Quadra where Id=$Id");
	header("Location: ListarGinasios.php");
?>