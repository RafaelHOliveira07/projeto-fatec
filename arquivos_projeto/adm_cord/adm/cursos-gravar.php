<?php

require_once "classes/Curso.php";

$curso = new Curso();

$curso->nome_curso = $_POST['nome_curso'];
$curso->sigla_curso = $_POST['sigla_curso'];
$curso->desc_curso = $_POST['desc_curso'];


$curso->inserir();