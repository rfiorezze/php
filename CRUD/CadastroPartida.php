<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title>Cadastro de Partida</title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
</head>
<body>
<form method="POST" action="">
	Id: <input type="text" name="edtId" required="required"><br><br>
	Set's: <input type="text" name="edtSets" required="required"><br><br>
	Sigla Visitante: <input type="text" name="edtSiglaVisitante" required="required"><br><br>
	Sigla Mandante: <input type="text" name="edtSiglaMandante" required="required"><br><br>
	Pontos Visitante: <input type="text" name="edtPontosVisitante" required="required"><br><br>
	Pontos Mandante: <input type="text" name="edtPontosMandante" required="required"><br><br>
	Vencedor: <input type="text" name="edtVencedor" required="required"><br><br>
	Id Rodada: <input type="text" name="edtIdRodada" required="required"><br><br>
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
		$partida = array(
			'Id' => $_POST['edtId'],
			'Sets' => $_POST['edtSets'],
			'Sigla_Visitante' => $_POST['edtSiglaVisitante'],
			'Sigla_Mandante' => $_POST['edtSiglaMandante'],
			'PontosVisitante' => $_POST['edtPontosVisitante'],
			'PontosMandante' => $_POST['edtPontosMandante'],
			'Vencedor' => $_POST['edtVencedor'],
			'IdRodada' => $_POST['edtIdRodada']			
			);
		$grava= DBCreate('partida',$partida);
		if($grava==true){
			echo "Ok!";
		}
		else{
			echo "Não foi possivel Gravar!";
		}
		
		}	

?>


<a href="ListarPartidas.php">Listar Partidas</a><br><br>

</body>
</html>