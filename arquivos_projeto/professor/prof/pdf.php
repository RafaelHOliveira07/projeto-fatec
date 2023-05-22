<?php

$id = $_GET['id'];

$sql = "SELECT pdf, tipo FROM tb_edital WHERE edital_id={$id}";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');

$resultado = $conexao->query($sql);

$dados = $resultado->fetch();

$tipo = $dados['tipo'];
$arquivo = $dados['pdf'];

header("Content-type: $tipo");
print $arquivo;