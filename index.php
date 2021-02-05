<?php
    if(isset($_POST['quit'])){
        session_unset();
        session_destroy();
    }
    include('acesso.php');
    if(isset($_POST['acao'])){
        $emaillogin = $_POST['email'];
        $senhalogin = $_POST['senha'];
        $sql = $pdo->prepare("SELECT * FROM tbl_login WHERE email = ?");
        $sql->execute([$emaillogin]);
        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            $login = $info['ID_login'];
            if($info['escolha']){
                if($senhalogin == $info['senha']){
                    $_SESSION['login'] = true; //Se for true então o usuário pode ficar logado.
                    $_SESSION['ID_login'] = $info['ID_login']; //Recuperamos o id.
                    $_SESSION['email'] = $info['email']; //Recuperamos o usuário.
                    $sql = $pdo->prepare("SELECT * from tbl_usuario WHERE ID_login = $login");
                    $sql->execute();
                    $info2 = $sql->fetch();
                    $_SESSION['nome'] = $info2['nome'];
                    $_SESSION['ID_usuario'] = $info2['ID_usuario'];
                    header("Location: Vitima.php");  //Redirecionamos o usuário para uma página privada que somente usuários logados podem acessar.
                    die();
                }else{
                    echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Email ou senha incorretos!</p></div>';
                }
            }
            if(!$info['escolha']){ 
                if($senhalogin == $info['senha']){
                    $_SESSION['login'] = true; //Se for true então o usuário pode ficar logado.
                    $_SESSION['ID_login'] = $info['ID_login']; //Recuperamos o id.
                    $_SESSION['email'] = $info['email']; //Recuperamos o usuário.
                    $sql = $pdo->prepare("SELECT * from tbl_adv WHERE ID_login = $login");
                    $sql->execute();
                    $info2 = $sql->fetch();
                    $_SESSION['nome'] = $info2['nome'];
                    $_SESSION['ID_adv'] = $info2['ID_adv'];
                    header("Location: Advogado.php");  //Redirecionamos o usuário para uma página privada que somente usuários logados podem acessar.
                    die();
                }else{
                    echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Email ou senha incorretos!</p></div>';
                }
            }
        }else{
            echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Email não encontrado.</p></div>';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Incluse.US</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="Complementos/css/bootstrap.css" rel="stylesheet" />
    <link href="Complementos/css/STYLEPRIn.css" rel="stylesheet"/>
    
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
                    <a href="index.php" class="navbar-brand">
                        <img src="Fotos2/2.png" alt="Logo da In>cluse.US" width="30px">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right navbar-uppercase">
                       
                        <li>
                            <a href="#PROJE" >O Projeto</a>
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
                            <a href="#NOSMAN" target="">Sobre nós</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modalLoginForm">Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
    
        <div class="section section-header" id="PRINCI">
            <div class="parallax filter filter-color-purple">
                <div class="image"
                    style="background-image: url('Fotos2/76a576df-9bbc-4a07-bbfb-15abccc3a258.jpg')">
                </div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                            <h1 class="title-modern">Incluse.US</h1>
                            <h3>Seja bem vindo.</h2>
                            <div class="separator line-separator">✻ </div>
                        </div>
    
                        <div class="button-get-started">
                            <a href="#PROJE" class="btn btn-warning btn-fill btn-lg ">
                               Saiba mais
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
                    <h2>Reivindique seus direitos</h2>
                    <div class="separator line-separator">✻</div>
                    <p class="description">Olá, você está acessando a Incluse.us, uma plataforma de inclusão, que tem como objetivo intermediar o contato de pessoas vulneráveis, e advogados.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class=""></i>
                        </div>
                        <h3>Cadastro</h3>
                        <p class="description">Bom o primeiro passo para nossa plataforma se tornar util a voce é efetuar um cadastro, seja vítima ou advogado. 
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class=""></i>
                        </div>
                        <h3>Relatar</h3>
                        <p class="description">O segundo passo que você deve tomar caso queira ser ajudado, é relatar o seu caso. É muito importante que você relate apenas a verdade. </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class=""></i>
                        </div>
                        <h3>Aceitar solicitação</h3>
                        <p class="description">Para preservar o anonimato das vítimas, mantemos todos os seus dados de contato e nome confidenciais. Quando o advogado decidir assumir seu caso uma solicitação para ver seu contato e seu nome aparecerá em sua pagina de casos.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class=""></i>
                        </div>
                        <h3>Aconselhamento</h3>
                        <p class="description">O relato que você fez, estará disponível em uma grande biblioteca de casos, catalogo esse que será consultado pelos profissionais de direito, que logo conseguem visualizar o seu ocorrido para auxilia-lo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-small section-get-started">
        <div class="parallax filter filter-color-purple">
            <div class="image"
                style="background-image: url('fotos2/9cea0037-d5be-4d6b-b000-09fca5c54ee3.jpg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">Faça o seu cadastro</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description"> Agora que você já sabe mais sobre o funcionamento da plataforma, chegou a hora de se cadastrar, clique no botão que expressa a sua necessidade</p>
                </div> 
                    <div class="row">
                            <div class="col-md-12">
                              <a href="Cad-Viti.php" id="B1" class="btn btn-fill btn-lg btn-warning text-center" ><span style="color: #f2cb05;">......</span>Vítima<span style="color: #f2cb05;">......</span>  </a>
                              <a href="Cad-Adv.php" id="B2" class="btn btn-fill btn-lg btn-warning text-center" >Advogado</a>
                            </div>
             </div>
          </div>
       </div>
    </div>
  </div>
  <form method="POST">
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title">Login</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
             </div>
             <div class="modal-body mx-3">
               <div class="md-form mb-5">
                
                 <label data-error="wrong" data-success="right" for="defaultForm-email">Digite seu email: *</label>
                 <input type="email" name="email" id="LoEmail" class="form-control validate">
                
               </div>
       
               <div class="md-form mb-4">
                 
                 <label data-error="wrong" data-success="right" for="defaultForm-pass">Digite sua senha: *</label>
                 <input type="password" name="senha" id="LoPass" class="form-control validate">
                 
               </div>
       
             </div>
             <div class="modal-footer d-flex justify-content-center">
               <input type="submit" name="acao" value="Entrar" class="btn btn-warning btn-fill btn-lg" >
             </div>
           </div>
         </div>
       </div>
    </form>  
       <div class="section section-nós" id="NOSMAN">
        <div class="parallax filter filter-color-gold">
            <div class="image" style="background-image:url('Fotos2/y.png')">
            </div>
            <div class= "section section-tentativa1">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>Sobre nós</h2>
                            <div class="separator separator-danger">✻</div>
                            <p class="description">A Incluse.us é uma plataforma totalmente beneficente e sem fins lucrativos, ela possui propósitos acadêmicos, o seu funcionamento e manutenção é provido por um pequeno número de estudantes programadores formados pelo Instituto PROA. </p>
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
                                                    <p class="description">Sendo "scrum master", organizou e participou de todas as etapas do projeto, provendo soluções para os problemas encontrados no decorrer do projeto</p>
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
                            <img alt="Advogado dando depoimento" class="img-circle" src="Fotos2/advogado1.jpg"/>
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
                            <img alt="Advogado dando depoimento" class="img-circle" src="Fotos2/advogado2.2.jpg"/>
                        </div>
                    </a>
                </li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="depoimento1">
                    <p class="description">
                        A minha experiência com a Incluse.US foi algo realmente incrível, a plataforma funciona de maneira muito clara, com ela consegui auxiliar e aconselhar diversas pessoas. <b>Me sinto realizado.</b>
                    </p>
                </div>
                <div class="tab-pane" id="depoimento2">
                    <p class="description">Não tenho palavras para descrever como a Incluse.US me SALVOU, obtive aconselhamento e auxílio de vários advogados, e consegui resolver um problema que me perseguia a anos! <b>Muito obrigado, Incluse.US</b>!
                    </p>
                </div>
                <div class="tab-pane" id="depoimento3">
                    <p class="description">Com certeza recomendarei a Incluse.US para os meus alunos de direito, vejo está plataforma de um jeito incrível, a forma como o auxílio é dado de forma objetiva e não muito formal, é perfeito para que todos aprendam um pouco mais sobre a desigualdade em que vivemos, e comecem a se adaptar a ela.
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
