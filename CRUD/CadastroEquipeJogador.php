<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title>Cadastro de Jogador nas Equipes</title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
	<script type="text/javascript"> 
jQuery.noConflict();
jQuery(function($){   
   $("#cpf").mask("999.999.999-99");
});
</script> 
</head>
<body>
<form method="POST" action="">
	Id: <input type="text" name="edtId" required="required"><br><br>
	Sigla Equipe: <input type="text" name="edtSiglaEquipe" required="required"><br><br>
	CPF Jogador: <input type="text" name="edtCPFJogador" required="required" id="cpf"><br><br>
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
		$equipes_jogador = array(
			'Id' => $_POST['edtId'],
			'Sigla_Equipe' => $_POST['edtSiglaEquipe'],
			'CPF_Jogador' => $_POST['edtCPFJogador']			
			);
		$grava= DBCreate('equipes_jogador',$equipes_jogador);
		if($grava==true){
			echo "Ok!";
		}
		else{
			echo "Não foi possivel Gravar!";
		}
		
		}	

?>


<a href="ListarEquipesJogador.php">Listar Jogadores em Equipes</a><br><br>

</body>
</html>