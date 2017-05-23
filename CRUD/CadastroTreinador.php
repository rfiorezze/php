<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title>Cadastro de Treinador</title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
</head>
<body>
<script type="text/javascript"> 
jQuery.noConflict();
jQuery(function($){   
   $("#cpf").mask("999.999.999-99");
   $("#CPF_Treinador").mask("999.999.999-99");   
});
</script> 
<form method="POST" action="">
	CPF: <input type="text" name="edtCPF" required="required" id="cpf" maxlength="14"><br><br>
	Nome: <input type="text" name="edtNome" required="required"><br><br>
	Altura: <input type="text" name="edtAltura" required="required"><br><br>
	Nacionalidade: <input type="text" name="edtNacionalidade" required="required"><br><br>	
	Sexo: <input type="text" name="edtSexo" required="required" maxlength="1"><br><br>	
	Sigla da Equipe: <input type="text" name="edtSiglaEquipe" required="required"><br><br>
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
		$treinador = array(
			'CPF' => $_POST['edtCPF'],
			'Nome' => $_POST['edtNome'],
			'Altura' => $_POST['edtAltura'],
			'Nacionalidade' => $_POST['edtNacionalidade'],
			'Sigla_Equipe' => $_POST['edtSiglaEquipe'],
			'Sexo' => $_POST['edtSexo']
			);
		$grava= DBCreate('treinador',$treinador);
		if($grava==true){
			echo "Ok!";
		}
		else{
			echo "Não foi possivel Gravar!";
		}
		
		}
		

?>


<a href="ListarTreinadores.php">Listar Treinadores</a><br><br>

</body>
</html>