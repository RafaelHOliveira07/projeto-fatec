<?php

require_once "classes/Edital.php";

$edital = new Edital();

$lista = $edital->listardsm();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <title>Editais - DSM</title>
    <link rel="shortcut icon" href="img/books_14151.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/styledsm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
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
                <li><a href="inico-prof.html#gpi"class="menu_link">Cursos</a></li>
                <li><a href="duvidas.'html"class="menu_link">Duvidas</a></li>
                <li><a href="sobre.html"class="menu_link" id="last">Sobre</a></li>
                
              </ul>
          
              <div class="login">
                        <div id="perf">
                            <span class="material-symbols-outlined" id="simbol">account_circle</span>
                            <a href="perfil_professor.html" id="perfil">Perfil do Candidato</a>
                        </div>
                </div>
        </nav>
     <section class="img-dsm">
 <h1>Editais - DSM</h1>
     </section>
     <div class="faixa">
         <p>Confira abaixo os Editais disponiveis para curso DSM</p>
     </div>

        <main>
            <?php foreach ($lista as $linha): ?>
                <section class="editais-dsm">
                <div class="edital reveal" >
                        
                        <ul class="info">
                            <li><span>Edital - <?php echo $linha['sigla_curso'] ?></span></li>
                            <li><span>Disciplina: <?php echo $linha['nome_disci'] ?></span></li> 
                            <li><span>Area correspondente: <?php echo $linha['area_disci'] ?></span></li>
                        </ul>
                        <div class="posi">
                            
                        <div class="add-info">
                                <span>Horario/data das aulas: <br>
                                <?php echo $linha['data_hora'] ?></span>
                                <span>Número do Edital:<?php echo $linha['num_edital'] ?></span>
                            <div class="linkpdf">
                              Vizualizar edital:<a href="pdf.php?id=<?= $linha['edital_id'] ?>" target="_blank"><img src="img/icons8-pdf-64.png" alt=""></a>
                            </div>
                        </div>
                        <div class="button">
                            <a href="confirma.php?edital_id=<?= $linha['edital_id'] ?>" id="ins-link"><button><span class="button">Inscrever-se</span></button></a>
                        </div>
                        </div>
                    </div>                    
                
                </section>
            <?php endforeach ?>
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
                    <div class="links reveal" >
                        
                        <div class="social">
                            <a href="https://api.whatsapp.com/send?phone=551938635210&text=" target="_blank"><img src="img/whatsapp.png" alt=""></a>
                        </div>

                        <div class="social">
                            <a href="https://www.facebook.com/fatecitapira" target="_blank"><img src="img/facebook.png" alt=""></a>
                        </div>    

                        <div class="social">       
                            <a href="https://www.facebook.com/fatecitapira" target="_blank"><img src="img/twitter.png" alt=""></a>
                        </div>

                        <div class="social">
                             <a href="https://www.youtube.com/channel/UChyGJgx8OzKqhHJBDaKdOZA" target="_blank"><img src="img/youtube.png" alt=""></a>
                        </div>
                        <div class="social">
                            <a href="https://www.instagram.com/fatecdeitapira/" target="_blank"><img src="img/instagram.png" alt=""> </a>
                        </div>
                    </div>
                </div>

       
    </footer>
    
    <script type="text/javascript" src="js/Nav.js"></script>
</body>

</html>