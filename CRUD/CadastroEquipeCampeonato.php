<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title>Cadastro de Equipes nos Campeonatos</title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
</head>
<body>
<form method="POST" action="">
	Id: <input type="text" name="edtId" required="required"><br><br>
	Sigla Equipe: <input type="text" name="edtSiglaEquipe" required="required"><br><br>
	Id Campeonato: <input type="text" name="edtIdCampeonato" required="required"><br><br>
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
		$equipes_campeonatos = array(
			'Id' => $_POST['edtId'],
			'Sigla_Equipe' => $_POST['edtSiglaEquipe'],
			'Id_Campeonato' => $_POST['edtIdCampeonato']			
			);
		$grava= DBCreate('equipes_campeonatos',$equipes_campeonatos);
		if($grava==true){
			echo "Ok!";
		}
		else{
			echo "Não foi possivel Gravar!";
		}
		
		}	

?>


<a href="ListarEquipesCampeonatos.php">Listar Equipes em Campeonatos</a><br><br>

</body>
</html>