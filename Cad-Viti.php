<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Cadastro Vitima </title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
                                <link rel="preconnect" href="https://fonts.gstatic.com">
    
                                <link rel="preconnect" href="https://fonts.gstatic.com">
                                <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet"> 
                                <style>* {
    margin: 0;
    padding: 0
}
body{
    font-family: 'Questrial', sans-serif;
}
html {
    height: 100%

}

p {
    color: rgb(0, 0, 0)
}

#heading {
    text-transform: uppercase;
    color: #f2cb05;  
    font-weight: normal
}



a {
    padding: 8px 15px 8px 15px;
    border: 1px solid rgb(0, 0, 0);
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #ffffff;
    background-color: #f2cb05;
    font-size: 16px;
    text-decoration: none;
    letter-spacing: 1px;
    font-family: 'Questrial', sans-serif;
    text-align: center;
}

a:focus,
a:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #f2cb05;
    text-decoration: none;
    font-family: 'Questrial', sans-serif;
    outline-width: 0
}


#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid rgb(0, 0, 0);
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #ffffff;
    background-color: #f2cb05;
    font-size: 16px;
    letter-spacing: 1px;
    font-family: 'Questrial', sans-serif
}


#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #f2cb05;
    font-family: 'Questrial', sans-serif;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #f2cb05;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #ffe148
}

#msform .action-button-previous {
    width: 100px;
    background: #5c12a6;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #a169d8
}

.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left;
    color: #f2cb05
}

.purple-text {
    color: #f2cb05;
    font-weight: normal
}

.steps {
    font-size: 22px;
    color:#5c12a6;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: black;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #5c12a6
}

#progressbar .active {
color: #5c12a6


}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
 font-family: FontAwesome;
 content: "\f041";

}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}
::-webkit-input-placeholder {
   color: white;
   font-family: 'Questrial', sans-serif;
}
#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: #a169d8;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: #d7baf3e0;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {

    background: #5c12a6
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #f2cb05
}

.fit-image {
    width: 100%;
    object-fit: cover
}
</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'>$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});</script>

<?php
                            require_once 'Classes.php';
                            $a = new Vitima;
                            ?>

                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Registre-se Vítima</h2>
                <p>Preencha todos os campos para que você possa passar a página</p>
                <form action="Valid-Cad-Viti.php" method="POST" id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Conta</strong></li>
                        <li id="personal"><strong>Informações pessoais</strong></li>
                        <li id="payment"><strong>Endereço</strong></li>
                        <li id="confirm"><strong>Concluído</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Informações da conta</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Passo 1 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Email: *</label> <input type="email" id="InputEMAIL" name="emailvtm" placeholder="Account@email.com"  aria-describedby="Criar Email" /> 
                                   <label class="fieldlabels">Senha: *</label> <input type="password" id="ASENHA" name="senhavtm" placeholder="Digite sua senha" /> 
                                   <label class="fieldlabels">Confirme a senha: *</label> <input type="password" id="CoASENHA" name="csenhavtm" placeholder="Confirme sua senha" />
                            </div> 
                        <input type="button" name="next" class="next action-button" value="Próxima" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Informações pessoais:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Passo 2 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Nome completo: *</label> <input type="text" name="nomevtm" placeholder="Nome completo" /> 
                              <label class="fieldlabels">Telefone: *</label> <input type="text" id="Telefone" name="telefonevtm" placeholder="Telefone" /> 
                              <label class="fieldlabels">Telefone alternativo: *</label> <input type="text" id="Telefone2" name="telefonevtm2" placeholder="Telefone2" />
                           </div> 
                        <input type="button" name="next" class="next action-button" value="Próxima" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Voltar" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Endereço</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Passo 3 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Digite seu bairro: *</label> <input type="text" id="Bairro" name="bairrovtm" placeholder="Digite seu bairro" /> 
                            <label >Estado:</label>                             <select name="estadovtm" id="estado" >
                            <?php
                            $est = $a->mostrarestado();
                            foreach ($est as $estado){
                            ?>                                             
                                <option value="<?php echo $estado['ID_estado'];?>" ><?php echo $estado['uf'];?></option> 
                            <?php 
                            }
                            ?>
                            </select>
                         </div> 
                        <input type="button" name="next" class="next action-button" value="Concluir" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Voltar" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Conclusão:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Passo 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>CADASTRO CONCLUIDO!</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="Fotos2/confirma.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">Cadastro concluido com sucesso, comece a receber auxilio agora: </h5>
                                </div>
                            </div>
                            <input type="submit" value="Concluir" name="1" class="previous action-button-previous">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
                            </body>

                        </html>