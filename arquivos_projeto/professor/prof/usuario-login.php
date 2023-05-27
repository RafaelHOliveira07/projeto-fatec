<?php

$usuario = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tb_prof WHERE email='{$usuario}' and senha='{$senha}'";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=portal_edital','root','');
$resultado = $conexao->query($sql);
$linha = $resultado->fetch();
$usuario_logado = $linha['email'];
$id_logado = $linha['prof_id'];

if($usuario_logado == null){
    // Usuário ou senha inválida
    header('Location: usuario-erro.php');
}else{
    session_start();
    $_SESSION['usuario_logado'] = $usuario_logado;
    $_SESSION['id_logado'] = $id_logado;
    header('Location: inicio-prof.html');
}

?>