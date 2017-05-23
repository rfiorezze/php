<?php

function DBCreate($table,array $dados){
	$dados = DBEscape($dados);
	$fields = implode(',', array_keys($dados));
	$values = "'".implode("','", $dados)."'";
	$query = "INSERT INTO $table ($fields) VALUES ($values)";
	return DBExecute($query);
}



function DBExecute($query){
	$link=DBConnect();
	$result = @mysqli_query($link, $query) or die (mysqli_error($link));
	DBClose($link);
	return $result;
}
