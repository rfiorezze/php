<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$parametro  = filter_input(INPUT_GET, "parametro");
if($parametro){
	$dados = DBExecute("select *from equipes_campeonatos where Sigla_Equipe like '$parametro%' order by Sigla_Equipe");
} else{ 
	$dados = DBExecute("select *from equipes_campeonatos order by Sigla_Equipe");
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
	<form action="ListarEquipesCampeonatos.php">
	<input type="text" name="parametro"/>
	<input type="submit" name="btBusca" value="Buscar">
	</form>

</p>


<table border="1">
	<tr>
	<td>Id</td>
	<td>Sigla Equipe</td>
	<td>Id Campeonato</td>
	</tr>
	<?php
	if($total){ do{
	?>
	<tr>
	<td><?php echo $linha['Id']?></td>
	<td><?php echo $linha['Sigla_Equipe']?></td>
	<td><?php echo $linha['Id_Campeonato']?></td>
	<td><a href="<?php echo "AlterarEquipeCampeonato.php?Id=".$linha['Id']."&Sigla_Equipe=".$linha['Sigla_Equipe']."&Id_Campeonato=".$linha['Id_Campeonato'] ?>">Alterar</a></td>
	<td><a href ="<?php echo "DeletarEquipesCampeonatos.php?Id=".$linha['Id'] ?>">Deletar</a></td>
	<input type="submit" name="btDeletar" value="Deletar" =""></form></td>
	</tr>
	<?php } while($linha = mysqli_fetch_assoc($dados));}
	mysqli_free_result($dados);
	?>
</table>

</body>
</html>