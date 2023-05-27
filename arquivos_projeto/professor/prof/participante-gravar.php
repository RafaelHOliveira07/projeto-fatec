<?php

require_once "classes/Participante.php";

$participante = new Participante();

$participante->prof_id = $_POST['prof_id'];
$participante->edital_id = $_POST['edital_id'];

$participante->inserir();