<?php
$email = $_POST['txtemail'];

$senha = $_POST['txtsenha'];

$conexao = mysqli_connect("localhost","root","root","vendas");

$insere = "INSERT INTO clientes (email, senha) VALUES ('$email', '$senha')";
mysqli_query($conexao, $insere);

require('homepage.php');    

?>