<?php

require_once 'classes/Curso.php';

$id = $_GET['id'];

$curso = new Curso($id);

$curso->excluir();

header('Location: adm-gerenciar-cursos.php');