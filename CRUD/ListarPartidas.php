<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$parametro  = filter_input(INPUT_GET, "parametro");
if($parametro){
	$dados = DBExecute("select *from partida where Vencedor like '$parametro%' order by Id");
} else{ 
	$dados = DBExecute("select *from partida order by Id");
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
	<form action="ListarPartidas.php">
	<input type="text" name="parametro"/>
	<input type="submit" name="btBusca" value="Buscar">
	</form>

</p>


<table border="1">
	<tr>
	<td>Id</td>
	<td>Sets</td>
	<td>Sigla Visitante</td>
	<td>Sigla Mandante</td>
	<td>Pontos Mandante</td>
	<td>Pontos Visitante</td>
	<td>Vencedor</td>
	<td>Id Rodada</td>
	</tr>
	<?php
	if($total){ do{
	?>
	<tr>
	<td><?php echo $linha['Id']?></td>
	<td><?php echo $linha['Sets']?></td>
	<td><?php echo $linha['Sigla_Visitante']?></td>
	<td><?php echo $linha['Sigla_Mandante']?></td>
	<td><?php echo $linha['PontosMandante']?></td>
	<td><?php echo $linha['PontosVisitante']?></td>
	<td><?php echo $linha['Vencedor']?></td>
	<td><?php echo $linha['IdRodada']?></td>
	<td><a href="<?php echo "AlterarPartida.php?Id=".$linha['Id']."&Sets=".$linha['Sets']."&Sigla_Visitante=".$linha['Sigla_Visitante']."&Sigla_Mandante=".$linha['Sigla_Mandante']."&PontosVisitante=".$linha['PontosVisitante']."&PontosMandante=".$linha['PontosMandante']."&Vencedor=".$linha['Vencedor']."&Vencedor=".$linha['Vencedor']."&IdRodada=".$linha['IdRodada']?>">Alterar</a></td>
	<td><a href ="<?php echo "DeletarPartida.php?Id=".$linha['Id'] ?>">Deletar</a></td>
	<input type="submit" name="btDeletar" value="Deletar" =""></form></td>
	</tr>
	<?php } while($linha = mysqli_fetch_assoc($dados));}
	mysqli_free_result($dados);
	?>
</table>

</body>
</html>