<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title>Cadastro de Quadra</title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
</head>
<body>
<form method="POST" action="">
	Id: <input type="text" name="edtId" required="required"><br><br>
	Largura: <input type="text" name="edtLargura" required="required"><br><br>
	Altura: <input type="text" name="edtAltura" required="required"><br><br>
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
		$quadra = array(
			'Id' => $_POST['edtId'],
			'Largura' => $_POST['edtLargura'],
			'Altura' => $_POST['edtAltura']				
			);
		$grava= DBCreate('quadra',$quadra);
		if($grava==true){
			echo "Ok!";
		}
		else{
			echo "Não foi possivel Gravar!";
		}
		
		}	

?>


<a href="ListarQuadras.php">Listar Quadras</a><br><br>

</body>
</html>