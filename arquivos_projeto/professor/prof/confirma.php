<?php

require_once 'usuario-verifica.php';

require_once "classes/Professor.php";
// Obtém o valor do parâmetro "id" da URL e armazena em variável
$id = $_SESSION['id_logado'];

$id_edital = $_GET['edital_id'];

// Cria um novo objeto da classe Aluno
$professor = new Professor($id);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <title>Confirmar Participação</title>
    <link rel="shortcut icon" href="img/books_14151.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/stylecom.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>

    <header id="cabeca">

        <div id="titu">
            <h1><a href="inico-prof.html" id="titulo">PORTAL DE EDITAIS <br> <span>FATEC ITAPIRA</span></a></h1>
        </div>


        <div id="fate">
            <img src="img/logo-cps-braso.png" alt="logoetec" class="img">
        </div>

    </header>

    <nav id="nav">
        <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
            <span id="hamburger"></span>
        </button>
        <ul id="menu" role="menu">
            <li><a href="inico-prof.html" class="menu_link">Home</a></li>
            <li><a href="inico-prof.html#gpi" class="menu_link">Cursos</a></li>
            <li><a href="duvidas.html" class="menu_link">Duvidas</a></li>
            <li><a href="sobre.html" class="menu_link" id="last">Sobre</a></li>

        </ul>

        <div class="login">
            <div id="perf">
                <span class="material-symbols-outlined" id="simbol">account_circle</span>
                <a href="perfil_professor.html" id="perfil">Perfil do Candidato</a>
            </div>
        </div>
    </nav>


    <main>
        <section class="perfil">

            <div class="info">



                <h1 id="titulo">Confirmar Dados</h1>
                <form enctype="" action="../prof/participante-gravar.php" method="post">
                    <input type="hidden" name="prof_id" id="" value="<?= $professor->prof_id ?>">
                    <input type="hidden" name="edital_id" id="" value="<?= $id_edital ?>">
                    <div class="area">
                        <h2>Dados Cadastrados</h2>
                        <div class="campo" id="name">
                            <label for="tel"> Nome Completo:</label>
                            <input type="text" name="name" value="<?= $professor->nome ?>">
                        </div>


                        <div class="campo ">
                            <label for="tel"> Telefone/Celular:</label>
                            <input type="tel" name="tel" id="tel" value="<?= $professor->tel ?>">
                        </div>

                        <div class="campo ">
                            <label for="cpf"> CPF:</label>
                            <input type="text" name="cpf" id="cpf" value="<?= $professor->cpf ?>">
                        </div>


                        <div class="campo ">
                            <label for="data"> Data de Nascimento:</label>
                            <input type="text" name="" id=""
                                value="<?php $datetime = new DateTime($professor->dataNasc);
                                echo $datetime->format('d/m/Y') ?>"
                                disabled>
                        </div>



                        <div class="campo ">
                            <label for="e-mail">E-mail:</label>
                            <input type="e-mail" name="" id="" value="<?= $professor->email ?>">
                        </div>

                        <div class="campo">
                            <label for="">Cidade:</label>
                            <input type="" name="" id="" value="<?= $professor->cidade ?>">
                        </div>

                        <div class="campo">
                            <label for="">Endereço:</label>
                            <input type="text" name="" id="" value="Rua carlos venturine, Dela Rocha I">
                        </div>

                        <div class="campo">
                            <label for="">Numero:</label>
                            <input type="text" name="" id="" value="99">
                        </div>
                    </div>
                    <div class="area">
                        <h2>Documentos Obrigatorios</h2>
                        <p>Se ouver mais de um Certificado de graduação, <br> por favor coloque todos em uma pasta
                            compactada <br> e todos nomeados.</p>
                        <div class="uploud">

                            <span>Anexo VI - Ficha de Manifestação de Interesse</span>
                            <div class='input-wrapper'>
                                <label for='input-file'>
                                    Selecionar
                                </label>
                                <input id='input-file' type='file' value='' />
                                <span class="span" id='file-name'></span>
                            </div>
                        </div>

                        <div class="uploud">

                            <span>Anexo IV - Tabela de Pontuação</span>
                            <div class='input-wrapper'>
                                <label for='input-file1'>
                                    Selecionar
                                </label>
                                <input id='input-file1' type='file' value='' />
                                <span class="span" id='file-name1'></span>
                            </div>
                        </div>

                        <div class="uploud">

                            <span>certificado de graduação</span>
                            <div class='input-wrapper'>
                                <label for='input-file2'>
                                    Selecionar
                                </label>
                                <input id='input-file2' type='file' value='' />
                                <span id='file-name2' class="span"></span>
                            </div>
                        </div>

                        <div class="uploud">

                            <span>Certificado de Doutorado</span>
                            <div class='input-wrapper'>
                                <label for='input-file3'>
                                    Selecionar
                                </label>
                                <input id='input-file3' type='file' value='' />
                                <span id='file-name3' class="span"></span>
                            </div>
                        </div>

                        <div class="uploud">

                            <span>Certificado Mestrado</span>
                            <div class='input-wrapper'>
                                <label for='input-file4'>
                                    Selecionar
                                </label>
                                <input id='input-file4' type='file' value='' />
                                <span id='file-name4' class="span"></span>

                            </div>

                            <div class="uploud">

                                <span>Livros Publicados</span>
                                <div class='input-wrapper'>
                                    <label for='input-file5'>
                                        Selecionar
                                    </label>
                                    <input id='input-file5' type='file' value='' />
                                    <span id='file-name5' class="span"></span>
                                </div>

                            </div>
                        </div>
                        <div class="save">
                            <input type="submit" class="botao" id="salvar" value="Confirmar">
                        </div>

                </form>

            </div>


        </section>

    </main>

    <div id="fundope">
    </div>

    <footer>
        <div id="linkpe" class="reveal">
            <ul>
                <h2>Fatec Itapira:</h2>
                <li> Endereço: Rua Tereza Lera Paoletti, 570/590 - Jardim</li>
                <li> Bela Vista</li>
                <li> CEP: 13974-080</li>
                <li>Telefones: (19) 3843-1996</li>
                <li>Whatsapp: (19) 98933-6291 | (19) 3863-5210</li>
                <li>E-mail: contato@fatecitapira.edu.br</li>
            </ul>
        </div>

        <div id="redes">
            <div class="links reveal">

                <div class="social ">
                    <a href="https://api.whatsapp.com/send?phone=551938635210&text=" target="_blank"><img
                            src="img/whatsapp.png" alt=""></a>
                </div>

                <div class="social">
                    <a href="https://www.facebook.com/fatecitapira" target="_blank"><img src="img/facebook.png"
                            alt=""></a>
                </div>

                <div class="social">
                    <a href="https://www.facebook.com/fatecitapira" target="_blank"><img src="img/twitter.png"
                            alt=""></a>
                </div>

                <div class="social">
                    <a href="https://www.youtube.com/channel/UChyGJgx8OzKqhHJBDaKdOZA" target="_blank"><img
                            src="img/youtube.png" alt=""></a>
                </div>
                <div class="social">
                    <a href="https://www.instagram.com/fatecdeitapira/" target="_blank"><img src="img/instagram.png"
                            alt=""> </a>
                </div>
            </div>
        </div>




    </footer>

    <script type="text/javascript" src="js/Nav.js"></script>
</body>

</html>