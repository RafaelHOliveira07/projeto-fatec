<?php

require_once 'classes/Curso.php';

$id = $_POST['curso_id'];
$curso = new Curso($id);

$curso->nome_curso = $_POST['nome_curso'];
$curso->sigla_curso = $_POST['sigla_curso'];
$curso->desc_curso = $_POST['desc_curso'];

$curso->atualizar();

header('Location: adm-gerenciar-cursos.php');