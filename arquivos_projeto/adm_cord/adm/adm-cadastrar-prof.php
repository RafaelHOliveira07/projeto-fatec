<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <link rel="stylesheet" href="styles/style_adm1.css">


    <link rel="shortcut icon" href="img/books_14151.png" type="image/x-icon">
    <title>Adm - Inicio</title>
</head>

<body>
    <header>
        <img src="../img/administracao.png" id="adm" alt="">
        <h2>Área Administrativa</h2>
    </header>

    <section class="posi">
        <section class="menu_adm">
            <ul>
                <li><a href="adm-inicio.html">Inicio</a></li>
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
        <main>
            <section class="form ">
                <h1>Cadastro Professor</h1>


                <form action="../adm/professor-gravar.php" method="post">
                    <div class="formin">
                        <div class="cadastro">
                            <div class="input">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo">
                            </div>
                            <div class="input">
                                <label for="dataNasc">Data Nascimento</label>
                                <input type="date" name="dataNasc" id="dataNasc">
                            </div>
                            <div class="input">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="Digite seu endereço e-mail">
                            </div>
                            <div class="input">
                                <label for="email">Celular</label>
                                <input type="tel" id="tel" name="tel" placeholder="(99) 99999-9999" maxlength="15"
                                    onkeyup="telefone(event)">
                            </div>
                            <div class="input">
                                <label for="cpf">CPF </label>
                                <input id="cpf" name="cpf" placeholder="000.000.000-00" maxlength="14"
                                    onkeyup="cpfreplace(event)" title="Digite um CPF no formato: xxx.xxx.xxx-xx">
                            </div>
                        </div>
                        <div class="cadastro">
                            <div class="input">
                                <label for="cep">CEP</label>
                                <input type="text" id="cep" name="cep" maxlength="9" onkeyup="cepreplace(event)"
                                    onblur="pesquisacep(this.value);" placeholder="Digite seu CEP">
                            </div>
                            <div class="input">
                                <label for="cidade">Cidade </label>
                                <input type="text" id="cidade" name="cidade" placeholder="Digite sua Cidade">
                            </div>
                            <div class="input">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                                <br>
                                <label for="senha" id="cara">de 4 a 6 caracteres</label>
                            </div>
                            <div class="input">
                                <label for="senha">Confirmar senha</label>
                                <input type="password" id="senha" name="senha" placeholder="Confirmar senha">
                            </div>
                        </div>
                    </div>
                    <div class="cadastro">
                        <div id="botoes " class="reveal">
                            <button class="botao" type="submit" name="" id="submit" value="Comfirmar">
                                <span class="button">Confirmar</span></button>
                        </div>

                    </div>
                </form>
            </section>
        </main>

        <footer>

            <script src="../adm/js/script.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>