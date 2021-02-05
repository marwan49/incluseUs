<?php
    include('acesso.php');
    if($_SESSION['login'] != true){
        header('Location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Página Vítima</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="Complementos/css/bootstrap.css" rel="stylesheet" />
    <link href="Complementos/css/STYLEPVIT.css" rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet"> 
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <div class="container">
           
                <div class="navbar-header">
                    <button id="HABMenu" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#">
                        <span class="sr-only">Abrir menu</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a href="Vitima.php" class="navbar-brand">
                        <img src="Fotos2/2.png" alt="Logo da In>cluse.US" width="30px">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right navbar-uppercase">
                       
                        <li>
                            <a href="#PROJE" target="_blank">O Projeto</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 Social
                            </a>
                            <ul class="dropdown-menu dropdown-danger">
                                <li>
                                    <a href="#"> Facebook</a>
                                </li>
                                <li>
                                    <a href="#"> Twitter</a>
                                </li>
                                <li>
                                    <a href="#"> Instagram</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <li>
                            <a href="#NOSMAN" target="_blank">Sobre nós</a>
                        </li>
                        <li>
                            <a href="index.php" name="quit" data-target="#modalLoginForm">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
    
    
        <div class="section section-header" id="PRINCI">
            <div class="parallax filter filter-color-gold">
                <div class="image"
                    style="background-image: url('Fotos2/share-1411235_1280.jpg')">
                </div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                            <h1 class="title-modern">Incluse.US</h1>
                            <h2></h2>
                            <div class="separator line-separator">✻ </div>
                        </div>
    
                        <div class="button-get-started">
                            <a href="#PROJE" target="#" class="btn btn-warning btn-fill btn-lg ">
                               Comece a utilizar
                            </a>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

    <div class="section" id="PROJE">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Termos e Condições</h2>
                    <div class="separator line-separator">✻</div>
                    <p class="description">Nós da Incluse.US respeitamos algumas normas, e é extremamente importante que você respeite algumas também</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                        </div>
                        <h3>Clareza e objetividade
                        </h3>
                        <p class="description">É importante que você seja claro, objetivo e transparente ao relatar um caso, o advogado precisa entender cada ponto do seu caso.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                        </div>
                        <h3>Relate somente a verdade</h3>
                        <p class="description">É impossível não mencionar que todo e qualquer relato deve ser feito de maneira sincera, e verdadeira, tente não exagerar, o exagero pode refletir na gravidade do
                            caso, ela pode ser categorizada em um valor maior do que ela deveria ser.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-icon">
                        <div class="icon text-danger">
                        </div>
                        <h3>Concordar</h3>
                        <p class="description">Ao fazer o seu primeiro relato, você estará concordando com esses termos e condições, a quebra desses termos podem levar a problemas judiciais, extensos e burocráticos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-small section-get-started">
        <div class="parallax filter filter-color-gold">
            <div class="image"
                style="background-image: url('fotos2/teste.jpg  ')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white title-modern">Que bom que você está aqui, <?php echo $_SESSION['nome'] ?></h2>
                    <h3> Deixe-nos ajudar você.</h3>
                    <div class="separator line-separator"> ♦ </div>
                    <p class="description">Entendemos que existe um público que enfrenta grandes dificuldades e que precisa de ajuda e amparo jurídico.
                        Pensando nisso, criamos a IncluseUs, que é uma rede focada em intermediar o profissional de direito com essas vítimas que sofrem por ser quem são. 
                        Nosso site busca casos que envolvam os direitos das mulheres, direitos raciais e/ou étnicos, os direitos LGBTQIA+ e PCD’s, pois a maioria dessas vítimas não recebem o suporte, aconselhamento jurídico necessário ou acabam com medo de correr atrás de seus direitos.</p>
                </div> 
                    <div class="row">
                            <div class="button-get-started">
                              <a href="Relatar.php" class="btn btn-fill btn-lg btn-warning text-center">Meus casos</a>
                            </div>
                    
             </div>
          </div>
       </div>
    </div>
  </div>
  <div class="section section-nós" id="NOSMAN">
    <div class="parallax filter filter-color-purple">
        <div class="image" style="background-image:url('Fotos2/x.png')">
        </div>
        <div class= "section section-tentativa1">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="title-area title-modern">
                        <h2>Sobre nós</h2>
                        <p class="description">Alunos programadores PROA</p>
                        <div class="separator separator-danger">✻</div>
                        <p class="description">A Incluse.us é uma plataforma totalmente beneficente e sem fins lucrativos, ela possui propositos academicos, o seu funcionamento e manutenção é provido por um pequeno número de estudantes programadores. </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
            
                <div class="container">
                    <div class="row">
                        <div class="card-group col-12">
                                <div class="col-md-4">
                                    <div class="card card-member">
                                        <div class="content">
                                            <div class="avatar avatar-danger">
                                                <img alt="Desenvolvedor backend Igor" class="img-circle" src="Fotos2/IGOR.jpeg"/>
                                            </div>
                                            <div class="description">
                                                <h3 class="title">Igor</h3>
                                                <p class="small-text">Scrum Master</p>
                                                <p class="description">Sendo scrum master, organizou e participou de todas as etapas do projeto, provendo soluções para os problemas encontrados no decorrer do projeto</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-member">
                                        <div class="content">
                                            <div class="avatar avatar-danger">
                                                <img alt="Desenvolvedor backend Brenda" class="img-circle" src="Fotos2/brenda2.jpg"/>
                                            </div>
                                            <div class="description">
                                                <h3 class="title">Brenda</h3>
                                                <p class="small-text">Desenvolvedor Back-END</p>
                                                <p class="description">Nomeou o projeto, codificou a terceira e quarta fase do banco de dados, estruturou roteiro do pitch, trouxe leveza para o projeto</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-member">
                                        <div class="content">
                                            <div class="avatar avatar-danger">
                                                <img alt="Desenvolvedor backend Marwan" class="img-circle" src="Fotos2/MARWAN2.jpg"/>
                                            </div>
                                            <div class="description">
                                                <h3 class="title">Marwan</h3>
                                                <p class="small-text">Desenvolvedor Back-END</p>
                                                <p class="description">Codificou a primeira e segunda fase do banco de dados; estruturou roteiro do pitch; organizou as reuniões de grupo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-member">
                                        <div class="content">
                                            <div class="avatar avatar-danger">
                                                <img alt="Desenvolvedor backend Caio" class="img-circle" src="Fotos2/CAIO2.jpg"/>
                                            </div>
                                            <div class="description">
                                                <h3 class="title">Caio</h3>
                                                <p class="small-text">Desenvolvedor Back-END</p>
                                                <p class="description">Codificou a terceira e quarta fase do banco de dados; criação e gerenciamento das redes-sociais; é pragmático</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-member">
                                        <div class="content">
                                            <div class="avatar avatar-danger">
                                                <img alt="Desenvolvedor frontend Joao" class="img-circle" src="Fotos2/JOAO2.jpg"/>
                                            </div>
                                            <div class="description">
                                                <h3 class="title">João</h3>
                                                <p class="small-text">Desenvolvedor Front-END</p>
                                                <p class="description">Desenvolveu o front-end; definiu a identidade visual do projeto; trazendo calma para o grupo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


<div class="section section-depoimentos">
    <div class="container">
        <div class="title-area">
            <h2 class="subtitle">Depoimentos e comentários sobre casos concluídos</h2>
            <h5>Avaliações</h5>
            <div class="separator separator-danger">∎</div>
        </div>

        <ul class="nav nav-text" role="tablist">
            <li class="active">
                <a href="#depoimento1" role="tab" data-toggle="tab">
                    <div class="image-clients">
                        <img alt="Advogado dando depoimento" class="img-circle" src="Fotos2/Advogado1.jpg"/>
                    </div>
                </a>
            </li>
            <li>
                <a href="#depoimento2" role="tab" data-toggle="tab">
                    <div class="image-clients">
                        <img alt="Vitima dando depoimento" class="img-circle" src="Fotos2/Chris.jpg"/>
                    </div>
                </a>
            </li>
            <li>
                <a href="#depoimento3" role="tab" data-toggle="tab">
                    <div class="image-clients">
                        <img alt="Advogado dando depoimento" class="img-circle" src="Fotos2/Advogado2.2.jpg"/>
                    </div>
                </a>
            </li>
        </ul>


        <div class="tab-content">
            <div class="tab-pane active" id="depoimento1">
                <p class="description">
                Minha experiência com a Incluse.US foi algo realmente incrível, a plataforma funciona de maneira muito clara, com ela consegui auxiliar e aconselhar diversas pessoas. <b>Me sinto realizado.</b>
                </p>
            </div>
            <div class="tab-pane" id="depoimento2">
                <p class="description">Não tenho palavras para descrever como a Incluse.US me SALVOU, obtive aconselhamento e auxilio de varios advogados, e consegui resolver um problema que me perseguia a anos!! <b>Muito obrigado, Incluse.US</b>!
                </p>
            </div>
            <div class="tab-pane" id="depoimento3">
                <p class="description"> Com certeza recomendarei a Incluse.US para os meus alunos de direito, vejo está plataforma de um jeito incrivel, a forma como o auxilio é dado de forma objetiva e não muito formal, é perfeito para que todos aprendam um pouco mais sobre a desigualdade em que vivemos, e comecem a se adaptar a ela. 
                </p>
            </div>

        </div>

    </div>
</div>

<footer class="footer footer-big" data-color=".">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Nós </h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Nossos portifolios</a>
                                </li>
                                <li>
                                    <a href="#">Mais sobre nós e o Proa</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Guia de ajuda</h5>
                         <nav>
                            <ul>
                                <li>
                                    <a href="#">Fale conosco</a>
                                </li>
                                <li>
                                    <a href="#">Como funciona?</a>
                                </li>
                                <li>
                                    <a href="#">Termos &amp; Condições</a>
                                </li>

                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="info">
                        <h5 class="title">Ultimás noticias</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                       <b>Nova plataforma</b> Incluse.US. Uma plataforma de inclusão que visa garantir justiça para pessoas em situações de vulnerabilidade
                                        <hr class="hr-small">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <b>Incluse.US</b>, nova plataforma de inclusão é responsável pela resolução de mais de 200 casos de assédio das ruas de São Paulo.
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Siga-nos</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                      Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-reddit btn-simple">
                                       Google+
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </footer>
</body>


<script src="Complementos/js/jquery.min.js" type="text/javascript"></script>
<script src="Complementos/js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" src="Complementos/js/mobile.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="Complementos/js/Incluse.us.js"></script>


</html>
