<?php

require_once "classes/Edital.php";

$edital = new Edital();

$edital->curso_id = $_POST['curso_id'];
$edital->disci_id = $_POST['disci_id'];
$edital->num_edital = $_POST['num_edital'];
$edital->nome_pdf = $_FILES['pdf']['name'];
$edital->tipo = $_FILES['pdf']['type'];
$arquivo = $_FILES['pdf']['tmp_name'];
$tamanho = $_FILES['pdf']['size'];

if ( $arquivo != "none" )
{
    $fp = fopen($arquivo, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);
}

$edital->pdf = $conteudo;


$edital->inserir();