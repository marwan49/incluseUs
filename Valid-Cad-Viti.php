<?php

header("Content-type: text/html; charset=utf-8");

//conexão com a classe da vitima
require_once 'Classes.php';
$a = new Vitima;
//atribuição de valores
$email = addslashes($_POST['emailvtm']);
$senha = addslashes($_POST['senhavtm']);
$bairro = addslashes($_POST['bairrovtm']);
$estado = addslashes($_POST['estadovtm']);
$nome = addslashes($_POST['nomevtm']);
$telefone = addslashes($_POST['telefonevtm']);
$escolha = 1;
var_dump($_POST);

if($a->CadastrarVitima4($bairro, $estado, $email, $senha, $escolha, $nome, $telefone)){
    include('acesso.php');
        $emaillogin = $_POST['emailvtm'];
        $senhalogin = $_POST['senhavtm'];
        $sql = $pdo->prepare("SELECT * FROM tbl_login WHERE email = ?");
        $sql->execute([$emaillogin]);
        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            $login = $info['ID_login'];
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
        }else{
            echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Email não encontrado.</p></div>';
        }
}else{
    return false;
    header("Location: Cad-Viti.php");
}


