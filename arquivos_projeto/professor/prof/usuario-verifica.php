<?php

session_start();

if(!isset($_SESSION['usuario_logado'])){
    //Você não tem acesso a esta funcionalidade
    header('Location: usuario-nao-logado.php');
}

?>