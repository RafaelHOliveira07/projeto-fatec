<?php

require_once "classes/Curso.php";

$curso = new Curso();

$lista = $curso->listar();

$lista2 = $lista;

require_once "classes/Disciplina.php";

$disciplina = new Disciplina();

$lista = $disciplina->listar();

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
      <img src="../img/administracao.png" id="adm" alt="">  <h2>Area Administrativa</h2>
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
            <li><a href="adm-part.php">Lista de Participantes</a></li>
        </ul>

    </section>
            
            <main>
                <section class="fundo">
                    <h1>Adicionar edital</h1>
                    <div class="campos">
                        <form enctype="multipart/form-data" action="../adm/edital-gravar.php" method="post">
                            <div class="inputs">
                                <span>Sigla do curso relacionado ao edital:
                                <select name="curso_id">
                                    <option value="">Selecione...</option>
                                <?php
                                        foreach ($lista2 as $linha):
                                            echo "<option value='{$linha['curso_id']}'>
                                                                 {$linha['sigla_curso']}
                                                  </option>";
                                        endforeach
                                    ?>
                                </select></span>
                            </div>
                            <div class="inputs">
                                <span>Insira a Disciplina correspondente ao edital:
                                <select name="disci_id">
                                <option value="">Selecione...</option>
                                <?php
                                        foreach ($lista as $linha):
                                            echo "<option value='{$linha['disci_id']}'>
                                                                 {$linha['nome_disci']}
                                                  </option>";
                                        endforeach
                                    ?>
                                </select></span> 
                            </div>
                                <label for="">Numero do edital:
                                <input type="text" name="num_edital" placeholder="Número do edital"></label>
                                <label class="labe" for="">Selecionar o (PDF)</label>
                                <div class='input-wrapper'>
                                <label for='input-file'>
                                  Selecionar PDF
                                
                                <input id='input-file' type='file' name="pdf"/>
                                <span id='file-name'></span></label>
                            </div>
                            <div class="save">
                                <input type="submit" class="botao" id="salvar" value="Confirmar">
                            </div>
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