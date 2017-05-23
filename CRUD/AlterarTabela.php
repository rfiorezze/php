<!DOCTYPE html>
<html lang="pt-br">
<head>
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
?>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title></title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
</head>
<body>
<div id="conteudo">
	<h1> Alterar Tabela </h1>
	<p>
	<form action="AlterarTabela2.php">
		<input type="hidden" name="Id" value="<?php echo $Id ?>">		
		Nome: <input type="text" name="Nome" value="<?php echo $Nome ?>"><br><br>	
		Pontos: <input type="text" name="Pontos" value="<?php echo $Pontos ?>">		
		Classificacao: <input type="text" name="Classificacao" value="<?php echo $Classificacao ?>">	
		Jogos: <input type="text" name="Jogos" value="<?php echo $Jogos ?>">
		Vitorias: <input type="text" name="Vitorias" value="<?php echo $Vitorias ?>">	
		Derrotas: <input type="text" name="Derrotas" value="<?php echo $Derrotas ?>">
		Razao: <input type="text" name="Razao" value="<?php echo $Razao ?>">			
		Id Grupo: <input type="text" name="Id_Grupo" value="<?php echo $Id_Grupo ?>">	
		Id Campeonato: <input type="text" name="Id_Campeonato" value="<?php echo $Id_Campeonato ?>">	
		<input type="submit" value="Alterar">
	</form>
	</p>

</body>
</html>