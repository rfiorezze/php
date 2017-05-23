<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title>Cadastro de Tabela</title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
</head>
<body>
<form method="POST" action="">
	Id: <input type="text" name="edtId" required="required"><br><br>
	Nome: <input type="text" name="edtNome" required="required"><br><br>
	Pontos: <input type="text" name="edtPontos" required="required"><br><br>
	Classificação: <input type="text" name="edtClassificacao" required="required"><br><br>
	Jogos :<input type="text" name="edtJogos" required="required"><br><br>
	Vitorias: <input type="text" name="edtVitorias" required="required"><br><br>
	Derrotas: <input type="text" name="edtDerrotas" required="required"><br><br>
	Razão: <input type="text" name="edtRazao" required="required"><br><br>
	Id Grupo <input type="text" name="edtIdGrupo" required="required"><br><br>
	Id Campeonato <input type="text" name="edtIdCampeonato" required="required"><br><br>

	<input type="submit" name="btCadastrar" value="Cadastrar">
</form>

<?php

	
		require 'config.php';
		require 'connection.php';
		require 'database.php';

if (isset($_POST["btCadastrar"])) {

Cadastrar();

}
		function Cadastrar(){
		$tabela = array(
			'Id' => $_POST['edtId'],
			'Nome' => $_POST['edtNome'],
			'Pontos' => $_POST['edtPontos'],
			'Classificacao' => $_POST['edtClassificacao'],
			'Jogos' => $_POST['edtJogos'],			
			'Vitorias' => $_POST['edtVitorias'],
			'Derrotas' => $_POST['edtDerrotas'],	
			'Razao' => $_POST['edtRazao'],
			'Id_Grupo' => $_POST['edtIdGrupo'],
			'Id_Campeonato' => $_POST['edtIdCampeonato']				
			);
		$grava= DBCreate('tabela',$tabela);
		if($grava==true){
			echo "Ok!";
		}
		else{
			echo "Não foi possivel Gravar!";
		}
		
		}	

?>

<a href="ListarTabelas.php">Listar Tabelas</a><br><br>

</body>
</html>