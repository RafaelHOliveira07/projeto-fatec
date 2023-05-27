<?php

require_once "classes/Curso.php";

$id = $_GET['id'];

$curso = new Curso($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
  <link rel="stylesheet" href="styles/style_adm2.css">
  <link rel="stylesheet" href="styles/style_adm1.css">
  <link rel="stylesheet" href="styles/style_adm3.css">
  <link rel="shortcut icon" href="img/books_14151.png" type="image/x-icon">
    <title>Adm - Adicionar Cursos</title>
</head>
<body>
   
<body>
    <header>
   <h2>Area Administrativa</h2>
</header>
</div>

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
                            <h1>Editar Curso:</h1>
                        <div class="campos">
                        
                            <form action="../adm/cursos-editar-gravar.php" method="post">  
                                <input type="hidden" name="curso_id" value="<?= $curso->curso_id ?>">
                                <div class="inputs">
                                    <span>Imagem de fundo relacionada ao Curso:</span>
                                    <div class='input-wrapper'>
                                        <label for='input-file'>
                                          Selecionar um arquivo
                                        </label>
                                        <input id='input-file' type='file' value='' />
                                        <span id='file-name'></span>
                                    </div>
                                </div>
                                <div class="inputs">
                                    <span>Nome correspodente ao Curso:</span> 
                                    <input type="text" name="nome_curso" value="<?= $curso->nome_curso ?>">
                                </div>
                                <div class="inputs">
                                    <span>Sigla correspodente ao Curso:</span> 
                                
                                    <input type="text" name="sigla_curso" value="<?= $curso->sigla_curso ?>">
                                </div>
                                <div class="inputs" id="dsc">
                                    <span>Breve descrição sobre o Curso:</span> 
                                
                                <textarea name="desc_curso" cols="40" rows="5"><?= $curso->desc_curso ?></textarea>
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
    <script type="text/javascript" src="js/Nav.js"></script>


</body>
</html>