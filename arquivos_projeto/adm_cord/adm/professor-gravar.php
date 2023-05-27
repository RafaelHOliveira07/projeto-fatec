<?php

require_once "classes/Professor.php";

$professor = new Professor();

$professor->nome = $_POST['nome'];
$professor->dataNasc = $_POST['dataNasc'];
$professor->email = $_POST['email'];
$professor->tel = $_POST['tel'];
$professor->cpf = $_POST['cpf'];
$professor->cep = $_POST['cep'];
$professor->cidade = $_POST['cidade'];
$professor->senha = $_POST['senha'];

$professor->inserir();