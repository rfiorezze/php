<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title>Cadastro de Equipe</title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
</head>
<body>
<form method="POST" action="">
	Sigla: <input type="text" name="edtSilga" required="required"><br><br>
	Nome: <input type="text" name="edtNome" required="required"><br><br>
	Id Ginasio: <input type="text" name="edtIdGinasio" required="required"><br><br>
	Local Origem: <input type="text" name="edtLocalorigem" required="required"><br><br>
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
		$equipe = array(
			'Sigla' => $_POST['edtSilga'],
			'Nome' => $_POST['edtNome'],
			'LocalOrigem' => $_POST['edtLocalorigem'],
			'Id_Ginasio' => $_POST['edtIdGinasio'],			
			);
		$grava= DBCreate('equipe',$equipe);
		if($grava==true){
			echo "Ok!";
		}
		else{
			echo "Não foi possivel Gravar!";
		}
		
		}	

?>

<a href="ListarEquipes.php">Listar Equipes</a><br><br>

</body>
</html>