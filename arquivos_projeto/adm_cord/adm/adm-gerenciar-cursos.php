<?php

require_once "classes/Curso.php";

$curso = new Curso();

$lista = $curso->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="styles/style_adm1.css">
    <link rel="stylesheet" href="styles/admgeren.css">
    <link rel="shortcut icon" href="img/books_14151.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/9869816a76.js" crossorigin="anonymous"></script>
    <title>Adm - Adicionar </title>
</head>
<body>
   
    <body>
    <header>
      <img src="../img/administracao.png" id="adm" alt="">  <h2>Area Administrativa</h2>
     </header>
   
       
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
            
            <table border="1">
                <tr>
                    <th>Código</th>
                    <th>Curso</th>
                    <th>Sigla</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
                <?php foreach ($lista as $linha): ?>
                <tr>
                    <td><?php echo $linha['curso_id'] ?></td>
                    <td><?php echo $linha['nome_curso'] ?></td>
                    <td><?php echo $linha['sigla_curso'] ?></td>
                    <td><?php echo $linha['desc_curso'] ?></td>
                    <td>
                        <a class="btn" href="cursos-editar.php?id=<?= $linha['curso_id'] ?>">Editar</a>
                        <a class="btn" href="cursos-excluir.php?id=<?= $linha['curso_id'] ?>">Excluir</a>
                    </td>
                    </tr>
                    <?php endforeach ?>
            </table>
        
    </section>

<footer>

</body>
</html>