<?php
    include('acesso.php');
    if($_SESSION['login'] != true){
        header('Location: index.php');
    }
    require_once 'Classes.php';
    $a = new Casos;

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casos</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="Complementos/css/bootstrap.css" rel="stylesheet" />
    <link href="Complementos/css/styleRELATAR.css" rel="stylesheet"/>
    
    
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
                    <a href="Vitima.php" class="navbar-brand mx-md-n5">
                        <img src="Fotos2/2.png" alt="Logo da Incluse.US" width="30px">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right navbar-uppercase">
                        <li>
                            <a href="Vitima.php" target="">Seja bem vindo, <?php echo $_SESSION['nome'] ?></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 Social
                            </a>
                            <ul class="dropdown-menu dropdown-danger">
                                <li>
                                    <a href=""> Facebook</a>
                                </li>
                                <li>
                                    <a href="">Twitter</a>
                                </li>
                                <li>
                                    <a href="">Instagram</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                
            
                         
                    </ul>
                </div>
           </div>
        </nav>
    <div class="section section-small section-get-started">
        <div class="parallax filter filter-color-gold">
            <div class="image"
                style="background-image: url('Fotos2/muie.jpg")>
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white title-modern">Relatar um caso</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description"> Calma, após relatar a tempestade vai passar. </p>
                    <div class="button-get-started">
                        <a href="RelatoForm.php" class="btn btn-fill btn-lg btn-warning text-center" >Relatar</a>
                      </div>
                </div> 
             </div>
          </div>
       </div>
       
<div class="section section-casosE">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Casos relatados</h2>
                    <div class="separator line-separator">✻</div>
                    <p class="description">Esses são seus casos relatados em andamento, isso significa que eles já estão prontos para serem pegos por nossos advogados. É possível alterar as informações dos casos a qualquer momento.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-casos">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                        <?php 
                            $caso = $a->ExibirCasos($_SESSION['ID_usuario']);
                            foreach ($caso as $c){
                            $u = $c['ID_categ_direito'];
                            $sql = $pdo->prepare("SELECT * FROM tbl_categ_direito WHERE ID_categ_direito = ?");
                            $sql->execute([$u]);
                            if($sql->rowCount() == 1){
                                $info = $sql->fetch();
                                $nomecateg = $info['nome'];
                            }
                        ?>
                        <div class="col-md-4">  
                            <div class="card card-member">
                                <div class="content">
                                    <div class="description-caso">
                                        <h3 class="title"><?php echo $c['titulo_caso'] ?></h3>
                                        <p class="small-text"><?php echo($nomecateg." <br>"); ?> <?php echo ("Nivel de gravidade: ". $c['gravidade']); ?></p>
                                        <p class="description"><?php echo $c['descricao_caso']; ?></p>
                                        <a href="#" class="btn btn-fill btn-lg btn-warning text-center" data-toggle="modal" data-target="#relatar-form">Editar relato</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <div class="section section-casosET">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Advogados aguardando por aprovação</h2>
                    <div class="separator line-separator">✻</div>
                    <p class="description"> Nossos advogados se propõem a ajudar você, porém é necessário aceitar a ajuda deles, para que eles possam entrar em contato com você. Observe os advogados que se propuseram a ajudar você, e aceite aqueles que você acredita que tenham mais perfil para auxiliá-lo. </p>
                </div>
            </div>
        </div>
    </div>

                <div class="section section-casos">
                 <div class="container">
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1">   
                        <div class="col-md-4">   
                        <div class="card card-member">
                            <div class="content">
                                <div class="avatar avatar-danger">
                                    <img alt="Solicitação de Advogado Claudio" class="img-circle" src="Fotos2/advogado1.jpg"/>
                                </div>
                                <div class="description">
                                    <h3 class="title">Rodrigo Alencar</h3>
                                    <p class="small-text">Advogado Civil</p>
                                    <p class="description">Olá, me chamo CLaudio Queiroz, sou advogado a 30 anos. Possuo experiência em todos os casos que você pode imaginar quando se trata de problemas do dia a dia. Posso lhe dar conselhos valiosos quanto as medidas que podem ser tomadas, para a resolução de seu problema. Eu posso te ajudar?</p>
                                    <a href="#" class="btn btn-fill btn-lg btn-warning text-center" data-toggle="modal" data-target="#relatar-form">Permitir contato</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="card card-member">
                            <div class="content">
                                <div class="avatar avatar-danger">
                                    <img alt="Solicitação de Advogado Claudio" class="img-circle" src="Fotos2/advogado2.2.jpg"/>
                                </div>
                                <div class="description">
                                    <h3 class="title">Claudio Queiroz Filho</h3>
                                    <p class="small-text">Advogado Criminalista</p>
                                    <p class="description">Olá, me chamo CLaudio Queiroz, sou advogado a 30 anos. Possuo experiência em todos os casos que você pode imaginar quando se trata de problemas do dia a dia. Posso lhe dar conselhos valiosos quanto as medidas que podem ser tomadas, para a resolução de seu problema. Eu posso te ajudar? </p>
                                    <a href="#" class="btn btn-fill btn-lg btn-warning text-center" data-toggle="modal" data-target="#relatar-form">Permitir contato</a>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                    <div class="col-md-4">
                        <div class="card card-member">
                            <div class="content">
                                <div class="avatar avatar-danger">
                                    <img alt="Solicitação de Advogado Claudio" class="img-circle" src="Fotos2/advogado3.jpg"/>
                                </div>
                                <div class="description">
                                    <h3 class="title">Robson Nonato</h3>
                                    <p class="small-text">Advogado Civil</p>
                                    <p class="description">Olá, me chamo Robson Nonato, sou advogado a 30 anos. Possuo experiência em todos os casos que você pode imaginar quando se trata de problemas do dia a dia. Posso lhe dar conselhos valiosos dizendo a você as medidas que podem ser tomadas, para a resolução de seu problema. Eu posso te ajudar? </p>
                                    <a href="#" class="btn btn-fill btn-lg btn-warning text-center" data-toggle="modal" data-target="#relatar-form">Permitir contato</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="relato" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content"> <!--MODALCO2-->
            
  <div class="modal-header">
    <h5 class="modal-title"><img src="fotos2/2.png" alt="Logo da Incluse.us" width="45" height="45"></h5>
      <button type="button" class="close" data-dismiss="modal">
      <span>&times;</span>
      </button>
  </div> <!--MODALH-->
  
  
  <div class="modal-body">
   <div class="row">
    <div class="col">
     <div class= "col-md-4">
      <div class="container">
            <h2>Caso de Homofobia</h2>
            <p class="Description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium similique soluta, accusamus at quia voluptatem quibusdam optio consectetur qui autem error magni aliquam laudantium esse odio, cum incidunt doloribus ipsum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio amet esse, corporis facere necessitatibus eum ipsum reprehenderit iure ad, velit nam voluptatibus. Assumenda amet non tempora veniam voluptatum libero quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit eum enim doloremque mollitia voluptatem molestias impedit ullam aperiam nam nisi laborum ratione minima omnis id, necessitatibus perspiciatis cupiditate quasi nobis!
            </P>
            <div class="button-get-started">
                <a href="#" class="btn btn-fill btn-lg btn-warning text-center" data-toggle="modal" data-target="#sitemodal">Apanhar caso</a>
              </div>
        </div>

      </div>
    </div> <!--MODALB--> 
   </div> <!--MODALC-->
   </div> <!--MODALD-->
   </div> <!--MODALF--> 
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