<?php
include('acesso.php');
header("Content-type: text/html; charset=utf-8");
//conexão com a classe da vitima
require_once 'Classes.php';
$a = new Casos;
//atribuição de valores
$titulo=addslashes($_POST["titulocaso"]);
$descricao=addslashes($_POST["descricaocaso"]);
$gravidade=addslashes($_POST["gravidadecaso"]);
$categorias=addslashes($_POST["categoriascaso"]);
$idusuario=addslashes($_SESSION["ID_login"]);

    if($a->CadastraCasos($titulo, $descricao, $gravidade, $categorias, $idusuario)) {
        header("Location: Relatar.php");
    }else{
      echo "erroooo";
    }

    ?>