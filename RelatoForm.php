<?php
    include('acesso.php');
    if($_SESSION['login'] != true){
        header('Location: index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Relatar caso</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet"> 
    <style type="text/css">
        body{
    background: -webkit-linear-gradient(left, #5c12a6, #5c12a6);
    font-family: 'Questrial', sans-serif;
}
a {
   
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #ffffff;
    background-color: #f2cb05;
    font-size: 16px;
    text-decoration: none;
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
.contact-form{
    background: #f2cb05;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #5c12a6;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    padding: 1.5%;
    background: #5c12a6;
    color: #fff;
    cursor: pointer;
    display: block;
    margin-top: 20px;
    margin-left: 245px;
}
.btnContactSubmit
{
    
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #5c12a6;
    border: none;
    cursor: pointer;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container contact-form">
            <div class="contact-image">
                <img src="Fotos2/2.png" alt="Logo Incluse.us"/>
            </div>
            <form method="post" action="Valid-Cad-Caso.php">
                <h3>Faça o seu relato</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="titulocaso" class="form-control" placeholder="Dê um nome ao seu caso *" value="" />
                        </div>
                        <div class="form-group">
                            <select id="categoriascaso" name="categoriascaso"" class="form-control" required="required" data-error="Selecione a categoria">
                                <option value="" selected disabled>Selecione a categoria do seu caso </option>
                                <option value="1">Direito das mulheres</option>
                                <option value="3">Direito dos negros</option>
                                <option value="2">Direitos dos LGBTQ+</option>
                                <option value="4">Direitos dos PCD's</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="" name="gravidadecaso" class="form-control" required="required" data-error="Selecione a gravidade">
                                <option value="" selected disabled>Selecione a gravidade do seu caso </option>
                                <option value="1">Gravidade 1</option>
                                <option value="2">Gravidade 2</option>
                                <option value="3">Gravidade 3</option>
                                <option value="4">Gravidade 4</option>
                            </select>
                        </div>
                        <div class="col-md-auto">
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Registrar caso">
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="descricaocaso" class="form-control" placeholder="Escreva sobre o seu caso aqui: *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
<script type="text/javascript">

</script>
</body>
</html>
