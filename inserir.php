<?php
$conexao = mysqli_connect("localhost","root","","WEBAUTOS") or print (mysqli_error());

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$preco = $_POST['preco'];


$sql = "INSERT INTO automoveis (marca, modelo, ano, preco)
VALUES ('$marca', '$modelo', '$ano', '$preco')";

 
	// Comando SQL executado 
$resultado = mysqli_query($conexao,$sql);

if ($resultado) echo "registro adicionado com sucesso <br />";

// Encerra conexão
mysqli_close($conexao);

?>