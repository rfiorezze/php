<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title>Cadastro de Estatisticas</title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
</head>
<body>
<form method="POST" action="">
	Id: <input type="text" name="edtId" required="required"><br><br>
	Pontos Feitos: <input type="text" name="edtPontosFeitos" required="required"><br><br>
	Infrações: <input type="text" name="edtInfracoes" required="required"><br><br>
	Tabela: <input type="text" name="edtIdTabela" required="required"><br><br>
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
		$estatisticas = array(
			'Id' => $_POST['edtId'],
			'Pontos_Feitos' => $_POST['edtPontosFeitos'],
			'Id_Tabela' => $_POST['edtIdTabela'],
			'Infracoes' => $_POST['edtInfracoes']			
			);
		$grava= DBCreate('estatisticas',$estatisticas);
		if($grava==true){
			echo "Ok!";
		}
		else{
			echo "Não foi possivel Gravar!";
		}
		
		}	

?>

<a href="ListarEstatisticas.php">Listar Estatisticas</a><br><br>


</body>
</html>