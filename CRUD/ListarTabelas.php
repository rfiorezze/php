<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$parametro  = filter_input(INPUT_GET, "parametro");
if($parametro){
	$dados = DBExecute("select *from tabela where Nome like '$parametro%' order by Nome");
} else{ 
	$dados = DBExecute("select *from tabela order by Nome");
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
	<form action="ListarTabelas.php">
	<input type="text" name="parametro"/>
	<input type="submit" name="btBusca" value="Buscar">
	</form>

</p>


<table border="1">
	<tr>
	<td>Id</td>
	<td>Nome</td>
	<td>Pontos</td>
	<td>Classificacao</td>
	<td>Jogos</td>
	<td>Vitorias</td>
	<td>Derrotas</td>
	<td>Razao</td>
	<td>Id Grupo</td>
	<td>Id Campeonato</td>

	</tr>
	<?php
	if($total){ do{
	?>
	<tr>
	<td><?php echo $linha['Id']?></td>
	<td><?php echo $linha['Nome']?></td>
	<td><?php echo $linha['Pontos']?></td>
	<td><?php echo $linha['Classificacao']?></td>
	<td><?php echo $linha['Jogos']?></td>
	<td><?php echo $linha['Vitorias']?></td>
	<td><?php echo $linha['Derrotas']?></td>
	<td><?php echo $linha['Razao']?></td>
	<td><?php echo $linha['Id_Grupo']?></td>
	<td><?php echo $linha['Id_Campeonato']?></td>
	<td><a href="<?php echo "AlterarTabela.php?Id=".$linha['Id']."&Nome=".$linha['Nome']."&Pontos=".$linha['Pontos']."&Classificacao=".$linha['Classificacao']."&Jogos=".$linha['Jogos']."&Vitorias=".$linha['Vitorias']."&Derrotas=".$linha['Derrotas']."&Razao=".$linha['Razao']."&Id_Grupo=".$linha['Id_Grupo']."&Id_Campeonato=".$linha['Id_Campeonato'] ?>">Alterar</a></td>
	<td><a href ="<?php echo "DeletarTabela.php?Id=".$linha['Id'] ?>">Deletar</a></td>
	<input type="submit" name="btDeletar" value="Deletar" =""></form></td>
	</tr>
	<?php } while($linha = mysqli_fetch_assoc($dados));}
	mysqli_free_result($dados);
	?>
</table>

</body>
</html>