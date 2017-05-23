<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$parametro  = filter_input(INPUT_GET, "parametro");
if($parametro){
	$dados = DBExecute("select *from jogador where Nome like '$parametro%' order by Nome");
} else{ 
	$dados = DBExecute("select *from jogador order by Nome");
}
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados); 
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

<p>
	<form action="ListarJogadores.php">
	<input type="text" name="parametro"/>
	<input type="submit" name="btBusca" value="Buscar">
	</form>

</p>


<table border="1">
	<tr>
	<td>CPF</td>
	<td>Nome</td>
	</tr>
	<?php
	if($total){ do{
	?>
	<tr>
	<td><?php echo $linha['CPF']?></td>
	<td><?php echo $linha['Nome']?></td>
	<td><a href="<?php echo "AlterarJogador.php?CPF=".$linha['CPF']."&Nome=".$linha['Nome']."&Funcao=".$linha['Funcao']."&Altura=".$linha['Altura']."&Nacionalidade=".$linha['Nacionalidade']."&DataNasc=".$linha['DataNascimento']."&SiglaEquipe=".$linha['Sigla_Equipe']."&CPF_Treinador=".$linha['CPF_Treinador'] ?>">Alterar</a></td>
	<td><a href ="<?php echo "DeletarJogador.php?CPF=".$linha['CPF'] ?>">Deletar</a></td>
	<input type="submit" name="btDeletar" value="Deletar" =""></form></td>
	</tr>
	<?php } while($linha = mysqli_fetch_assoc($dados));}
	mysqli_free_result($dados);
	?>
</table>

</body>
</html>