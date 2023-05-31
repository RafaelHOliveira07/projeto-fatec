<?php

require_once "classes/Participante.php";

$participante = new Participante();

$lista = $participante->listar();

$lista2 = $participante->listar2();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="styles/style_adm1.css">
    <link rel="stylesheet" href="styles/admgeren.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="img/books_14151.png" type="image/x-icon">
    <title>Adm - Participantes</title>

</head>

<body>
    <header>
        <img src="../img/administracao.png" id="adm" alt="">
        <h2>Area Administrativa</h2>
        <div class="logout">
      <a href="">Sair<img src="../img/logout.png" id="logout" name="logout" alt=""></a>
    </div>
    </header>

    <section class="posi">
        <section class="menu_adm">
            <ul>
                <li><a href="adm-inicio.html">Inicio</a></li>
                <li><h2>Professores</h2></li>
                <li><a href="adm-cadastrar-prof.php">Cadastrar Professor</a></li>
                <li>
                    <h2>Cursos</h2>
                </li>
                <li><a href="adm-addcursos.php">Adicionar Curso</a></li>
                <li><a href="adm-gerenciar-cursos.php">Gerenciar cursos</a></li>
                <li>
                    <h2>Disciplinas</h2>
                </li>
                <li><a href="adm-adddisciplina.php">Adicionar Disciplina</a></li>
                <li><a href="#">Gerenciar Disciplinas</a></li>
                <li>
                    <h2>Editais</h2>
                </li>
                <li><a href="adm-adicionar.php">Adicionar Editais</a></li>
                <li><a href="adm-geren-editais.php">Gerenciar Editais</a></li>
                <li>
                    <h2>Participantes</h2>
                </li>
                <li><a href="adm-listprof.php">Lista de Participantes</a></li>
            </ul>

        </section>
        <table border="1">
            <tr>
                <th>Código Participante</th>
                <th>Nome</th>
                <th>Número Edital</th>
                <th>Sigla Curso</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($lista as $linha): ?>
                <?php foreach ($lista2 as $linha2): ?>
                    <tr>
                        <td>
                            <?php echo $linha['part_id'] ?>
                        </td>
                        <td>
                            <?php echo $linha['nome'] ?>
                        </td>
                        <td>
                            <?php echo $linha2['num_edital'] ?>
                        </td>
                        <td>
                            <?php echo $linha2['sigla_curso'] ?>
                        </td>
                        <td>
                            <?php echo $linha['cpf'] ?>
                        </td>
                        <td>
                            <?php echo $linha['tel'] ?>
                        </td>
                        <td>
                            <a class="btn" href="cursos-editar.php?id=<?= $linha['curso_id'] ?>">Editar</a>
                            <a class="btn" href="cursos-excluir.php?id=<?= $linha['curso_id'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endforeach ?>
        </table>


    </section>

    </main>
    </section>

    <footer>

</body>

</html>