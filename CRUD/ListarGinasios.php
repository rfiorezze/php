<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$parametro  = filter_input(INPUT_GET, "parametro");
if($parametro){
	$dados = DBExecute("select *from ginasio where Nome like '$parametro%' order by Nome");
} else{ 
	$dados = DBExecute("select *from ginasio order by Nome");
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
	<form action="ListarGinasios.php">
	<input type="text" name="parametro"/>
	<input type="submit" name="btBusca" value="Buscar">
	</form>

</p>


<table border="1">
	<tr>
	<td>Id</td>
	<td>Nome</td>
	<td>UF</td>
	<td>Cidade</td>
	<td>Rua</td>
	<td>Numero</td>
	<td>Id Quadra</td>
	</tr>
	<?php
	if($total){ do{
	?>
	<tr>
	<td><?php echo $linha['Id']?></td>
	<td><?php echo $linha['Nome']?></td>
	<td><?php echo $linha['UF']?></td>
	<td><?php echo $linha['Cidade']?></td>
	<td><?php echo $linha['Rua']?></td>
	<td><?php echo $linha['Numero']?></td>
	<td><?php echo $linha['Id_Quadra']?></td>
	<td><a href="<?php echo "AlterarGinasio.php?Id=".$linha['Id']."&Nome=".$linha['Nome']."&UF=".$linha['UF']."&Cidade=".$linha['Cidade']."&Rua=".$linha['Rua']."&Numero=".$linha['Numero']."&Id_Quadra=".$linha['Id_Quadra'] ?>">Alterar</a></td>
	<td><a href ="<?php echo "DeletarGinasio.php?Id=".$linha['Id'] ?>">Deletar</a></td>
	<input type="submit" name="btDeletar" value="Deletar" =""></form></td>
	</tr>
	<?php } while($linha = mysqli_fetch_assoc($dados));}
	mysqli_free_result($dados);
	?>
</table>

</body>
</html>