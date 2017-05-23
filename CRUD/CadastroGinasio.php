<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title>Cadastro de Ginasio</title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
</head>
<body> 
<form method="POST" action="">
	Id: <input type="text" name="edtId" required="required" maxlength="5"><br><br>
	Nome: <input type="text" name="edtNome" required="required" maxlength="50"><br><br>
	UF: <input type="text" name="edtUF" required="required"><br><br>
	Cidade: <input type="text" name="edtCidade" required="required"><br><br>
	Rua: <input type="text" name="edtRua" required="required"><br><br>
	Numero: <input type="text" name="edtNumero" required="required"><br><br>
	Id Quadra: <input type="text" name="edtIdQuadra" required="required" "><br><br>
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
		$ginasio = array(
			'Id' => $_POST['edtId'],
			'Nome' => $_POST['edtNome'],
			'UF' => $_POST['edtUF'],
			'Cidade' => $_POST['edtCidade'],
			'Rua' => $_POST['edtRua'],
			'Numero' => $_POST['edtNumero'],
			'Id_Quadra' => $_POST['edtIdQuadra']
			);
		$grava= DBCreate('ginasio',$ginasio);
		if($grava==true){
			echo "Ok!";
		}
		else{
			echo "Não foi possivel Gravar!";
		}
		
		}
		

?>



<a href="ListarGinasios.php">Listar Ginasios</a><br><br>
</body>
</html>