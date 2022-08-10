<?php

$conexao = mysqli_connect("localhost","root","","WEBAUTOS") or print (mysqli_error());
$sql = "SELECT * FROM automoveis";

$resultado = mysqli_query($conexao,$sql);

if ($resultado) {
	//pecorrendo os registros da consulta. 
	while($aux = mysqli_fetch_assoc($resultado)) { 
  		echo "-----------------------------------------<br />"; 
  		echo "Marca:".$aux["marca"]."<br />"; 
  		echo "Modelo:".$aux["modelo"]."<br />"; 
  		echo "Ano:".$aux["ano"]."<br />"; 
  		echo "Preço:".$aux["preco"]."<br />"; 

	}
}else{
	echo "Não foi encontrado nada!";
}

?>