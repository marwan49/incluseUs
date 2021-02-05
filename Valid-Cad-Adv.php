<?php

header("Content-type: text/html; charset=utf-8");

//conexão com a classe da vitima
require_once 'Classes.php';
$a = new Advogado;
//atribuição de valores
$email = addslashes($_POST['emailadv']);
$senha = addslashes($_POST['senhaadv']);
$bairro = addslashes($_POST['bairroadv']);
$estado = addslashes($_POST['estadoadv']);
$nome = addslashes($_POST['nomeadv']);
$telefone = addslashes($_POST['telefoneadv']);
$escolha = 0;
var_dump($_POST);

if($a->CadastrarAdvogado4($bairro, $estado, $email, $senha, $escolha, $nome, $telefone)){
    include('acesso.php');
        $emaillogin = $_POST['emailadv'];
        $senhalogin = $_POST['senhaadv'];
        $sql = $pdo->prepare("SELECT * FROM tbl_login WHERE email = ?");
        $sql->execute([$emaillogin]);
        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            $login = $info['ID_login'];
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
        }else{
            echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Email não encontrado.</p></div>';
        }
}else{
    return false;
    header("Location: Cad-Adv.php");
}

