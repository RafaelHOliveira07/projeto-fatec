<?php

require_once "classes/Curso.php";

$curso = new Curso();

$lista = $curso->listar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
  <link rel="stylesheet" href="styles/style_adm1.css">
  <link rel="stylesheet" href="styles/style_adm2.css">
  <link rel="stylesheet" href="styles/style_adm3.css">
  <link rel="shortcut icon" href="img/books_14151.png" type="image/x-icon">
    <title>Adm - Adicionar Editais</title>
</head>
<body>
<header>
      <img src="../img/administracao.png" id="adm" alt="">  <h2>Área Administrativa</h2>
     </header>
    <body>
   
        <section class="posi">
        <section class="menu_adm">
        <ul>
    <li><a href="adm-inicio.html">Inicio</a></li>
    <li><a href="adm-cadastrar-prof.php">Cadastrar Professor</a></li>
            <li><h2>Cursos</h2></li>
            <li><a href="adm-addcursos.php">Adicionar Curso</a></li>
            <li><a href="adm-gerenciar-cursos.php">Gerenciar cursos</a></li>
            <li><h2>Disciplinas</h2></li>
            <li><a href="adm-adddisciplina.php">Adicionar Disciplina</a></li>
            <li><a href="#">Gerenciar Disciplinas</a></li>
            <li><h2>Editais</h2></li>
            <li><a href="adm-adicionar.php">Adicionar Editais</a></li>
            <li><a href="adm-geren-editais.php">Gerenciar Editais</a></li>
           <li><h2>Participantes</h2></li> 
           <li><a href="adm-listprof.php">Lista de Participantes</a></li>
        </ul>

    </section>
            <main>
                <section class="fundo">
                    <h1>Adicionar Disciplina</h1>
                    <div class="campos">
                        <form action="../adm/disciplinas-gravar.php" method="post">
                            <div class="inputs">
                                <span>Insira o curso da Disciplina:
                                <select name="curso_id">
                                    <option value="">Selecione...</option>
                                    <?php
                                        foreach ($lista as $linha):
                                            echo "<option value='{$linha['curso_id']}'>
                                                                 {$linha['nome_curso']}
                                                  </option>";
                                        endforeach
                                    ?>
                                </select> 
                            </div>
                            <div class="inputs">
                                <span>Insira o nome correspondente a Disciplina:
                                <input type="text" name="nome_disci" placeholder="Disciplina"></span> 
                            </div>
                            <div class="inputs">
                                <span>Insira a área correspodente a Disciplina:
                                <input type="text" name="area_disci" placeholder="área"></span> 
                            </div>
                            <div class="inputs">
                                <span>Insira o dia e horário correspodente a Disciplina:
                                    <input type="text" name="data_hora" placeholder="Escolha um horario:" list="horario">
                                    <datalist id="horario">
                                        <option value="Segunda-feira das 19:30 as 22:30"></option>
                                        <option value="Segunda-feira das 19:30 as 21:00"></option>
                                        <option value="Segunda-feira das 21:00 as 22:30"></option>
                                        <option value="Terça-feira das 19:30 as 22:30 "></option>
                                        <option value="Terça-feira das 19:30 as 21:00"></option>
                                        <option value="Terça-feira das 21:00 as 22:30"></option>
                                        <option value="Quarta-feira das 19:30 as 22:30 "></option>
                                        <option value="Quarta-feira das 19:30 as 21:00"></option>
                                        <option value="Quarta-feira das 21:00 as 22:30"></option>
                                        <option value="Sabado das 07:40 as 11:00"></option>
                                    </datalist></span>
                            </div>
                            <div class="save">
                                <input type="submit" class="botao" id="salvar" value="Confirmar">
                            </div>
                        </form>
                    </div>
                </section>
            </main>
    </section>

<footer>
    <script type="text/javascript" src="js/Nav.js"></script>
</body>
</html>