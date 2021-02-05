<?php


    Class Vitima{

        private $pdo;
        #1°:
        #conexão com o banco de dados:
        public function __construct() {
            try{
                //                      Banco de dados:     |  host:           |  usuario e senha:
                $this->pdo = new PDO("mysql:dbname=db_incluseus;host=localhost","root","root", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }
            catch(PDOexception $e){ #comando para notificar erros do PDO
                echo"Erro com o banco de dados: ". $e->getMessage();
                exit();
            }
            catch(exception $e){ #notificação de erros gerais
                echo"Erro generico: " . $e->getMessage();
                exit();
            }
        }

        //função para mostrar os estados no cadastro
        public function mostrarestado(){
            $bscest = $this->pdo->prepare("SELECT ID_estado, uf FROM tbl_estado");
            $bscest->execute();
            $est = $bscest->fetchall(PDO::FETCH_ASSOC);
            return $est;
        }
        
        public function CadastrarVitima1($email, $senha, $escolha){
            try{
      
                $stmt1 = $this->pdo->prepare("INSERT INTO tbl_login (email, senha, escolha) VALUES (:email, :senha, :escolha)");
                $stmt1->bindParam(":senha", $senha);
                $stmt1->bindParam(":email", $email);
                $stmt1->bindParam(":escolha", $escolha);
    
                if($stmt1->execute()){
                    if($stmt1->rowCount() > 0){
                        echo"<br>part 1 efetuada com sucesso<br>";
                        $res1 = $this->pdo->prepare("SELECT * FROM tbl_login ORDER BY ID_login DESC LIMIT 1");
                        $res1->execute();
                        $idlogin = $res1->fetch(PDO::FETCH_ASSOC);
                        var_dump($idlogin);
                        return $idlogin;
                    } else {
                        echo"<br> Erro na parte 1 <br>";
                        return false;
                    }
                }else{
                    throw new PDOexception("ERRO: Não foi possível executar a declaração sql na parte 1");
                }
            } catch(PDOexeption $error1){
                echo "Erro: " . $error1->getMessage();
            }
        }
    
        public function CadastrarVitima2($bairro, $estado){
            
            try{
                $stmt2 = $this->pdo->prepare("INSERT INTO tbl_end_usuario (bairro, ID_estado) VALUES (:bairro, :estado)");
                $stmt2->bindParam(":bairro", $bairro);
                $stmt2->bindParam(":estado", $estado);
    
                if($stmt2->execute()){
                    if($stmt2->rowCount() > 0){
                        echo"<br> Parte 2 efetuada com sucesso <br>";
                        $res2 = $this->pdo->prepare("SELECT * from tbl_end_usuario ORDER BY ID_end_usuario DESC LIMIT 1");
                        $res2->execute();
                        $idendereco = $res2->fetch(PDO::FETCH_ASSOC);
                        var_dump($idendereco);
                        return $idendereco;
                    } else {
                        echo"<br> Erro na parte 2<br>";
                        return false;
                    }
                } else{
                    throw new PDOexception("ERRO: Não foi possível executar a declaração sql na parte 2");
                }
            } catch(PDOException $erro2){
                echo "Erro: " . $erro2->getmessage();
            }
        }
    
        public function CadastrarVitima3($bairro, $estado, $email, $senha, $escolha, $nome){
            $idlogin = $this->CadastrarVitima1($email, $senha, $escolha);
            $idendereco = $this->CadastrarVitima2($bairro, $estado);
            var_dump($idendereco);
            if(!$idlogin && !$idendereco){
                return false;
            }
            try{
                $stmt5=$this->pdo->prepare("INSERT INTO tbl_usuario (nome, ID_end_usuario, ID_login) VALUES (:nome, :idendereco, :idlogin)");
                $stmt5->bindParam(":nome",$nome);
                $stmt5->bindParam(":idendereco", $idendereco['ID_end_usuario']);
                $stmt5->bindParam(":idlogin",$idlogin['ID_login']); 
                if ($stmt5->execute()) {
                    if ($stmt5->rowCount() > 0) {
                        echo "<br>Parte 3 efetuada com sucesso<br>";
                        $res3 = $this->pdo->prepare("SELECT * from tbl_usuario ORDER BY ID_usuario DESC LIMIT 1");
                        $res3->execute();    
                        $idusuario = $res3->fetch(PDO::FETCH_ASSOC);
                        var_dump($idusuario);
                        return $idusuario;
                    } else {
                        echo "<br>erro na parte 3<br>";
                        return false;
                    }  
                } else {
                    throw new PDOException("ERRO: Não foi possível executar a declaração sql na parte 3");
                }
            }catch (PDOException $erro3) {
                echo "Erro: " . $erro3->getMessage();
            }
        }
    
        public function CadastrarVitima4($bairro, $estado, $email, $senha, $escolha, $nome, $telefone) 
        {
            $idusuario=$this->CadastrarVitima3($bairro, $estado, $email, $senha, $escolha, $nome);
            if(!$idusuario){
                return false;
            }
            try{
                $stmt4 = $this->pdo->prepare("INSERT INTO tbl_tel_usuario (ID_usuario, telefone) VALUES (:idusuario, :telefone)");
                $stmt4->bindParam(":idusuario", $idusuario['ID_usuario']);
                $stmt4->bindParam(":telefone", $telefone);
    
                if ($stmt4->execute()) {
                    if ($stmt4->rowCount() > 0) {
                        echo "<br>Parte 4 efetuada com sucesso<br>";
                        return true;
                    } else {
                        echo "<br>Erro na parte 4<br>";
                        return false;
                    }  
                } else {
                    throw new PDOException("ERRO: Não foi possível executar a declaração sql na parte 4");
                }
            }catch (PDOException $erro4) {
                echo "Erro: " . $erro4->getMessage();
            }
        }


    }



    Class Advogado{
        private $pdo;
        #1°:
        #conexão com o banco de dados:
        public function __construct() {
            try{
                //                      Banco de dados:     |  host:           |  usuario e senha:
                $this->pdo = new PDO("mysql:dbname=db_incluseus;host=localhost","root","root", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }
            catch(PDOexception $e){ #comando para notificar erros do PDO
                echo"Erro com o banco de dados: ". $e->getMessage();
                exit();
            }
            catch(exception $e){ #notificação de erros gerais
                echo"Erro generico: " . $e->getMessage();
                exit();
            }
        }

        public function mostrarestado(){
            $bscest = $this->pdo->prepare("SELECT ID_estado, uf FROM tbl_estado");
            $bscest->execute();
            $est = $bscest->fetchall(PDO::FETCH_ASSOC);
            return $est;
        }

        public function CadastrarAdvogado1($email, $senha){
            try{
      
                $stmt1 = $this->pdo->prepare("INSERT INTO tbl_login (email, senha, escolha) VALUES (:email, :senha, :escolha)");
                $stmt1->bindParam(":senha", $senha);
                $stmt1->bindParam(":email", $email);
                $stmt1->bindParam(":escolha", $escolha);
                if($stmt1->execute()){
                    if($stmt1->rowCount() > 0){
                        echo"<br>part 1 efetuada com sucesso<br>";
                        $res1 = $this->pdo->prepare("SELECT * FROM tbl_login ORDER BY ID_login DESC LIMIT 1");
                        $res1->execute();
                        $idlogin = $res1->fetch(PDO::FETCH_ASSOC);
                        var_dump($idlogin);
                        return $idlogin;
                    } else {
                        echo"<br> Erro na parte 1 <br>";
                        return false;
                    }
                }else{
                    throw new PDOexception("ERRO: Não foi possível executar a declaração sql na parte 1");
                }
            } catch(PDOexeption $error1){
                echo "Erro: " . $error1->getMessage();
            }
        }
    
        public function CadastrarAdvogado2($bairro, $estado){
            
            try{
                $stmt2 = $this->pdo->prepare("INSERT INTO tbl_end_adv (bairro, ID_estado) VALUES (:bairro, :estado)");
                $stmt2->bindParam(":bairro", $bairro);
                $stmt2->bindParam(":estado", $estado);
    
                if($stmt2->execute()){
                    if($stmt2->rowCount() > 0){
                        echo"<br> Parte 2 efetuada com sucesso <br>";
                        $res2 = $this->pdo->prepare("SELECT * from tbl_end_adv ORDER BY ID_end_adv DESC LIMIT 1");
                        $res2->execute();
                        $idendereco = $res2->fetch(PDO::FETCH_ASSOC);
                        var_dump($idendereco);
                        return $idendereco;
                    } else {
                        echo"<br> Erro na parte 2<br>";
                        return false;
                    }
                } else{
                    throw new PDOexception("ERRO: Não foi possível executar a declaração sql na parte 2");
                }
            } catch(PDOException $erro2){
                echo "Erro: " . $erro2->getmessage();
            }
        }
    
        public function CadastrarAdvogado3($bairro, $estado, $email, $senha, $escolha, $nome){
            $idlogin = $this->CadastrarAdvogado1($email, $senha, $escolha);
            $idendereco = $this->CadastrarAdvogado2($bairro, $estado);
            var_dump($idendereco);
            if(!$idlogin && !$idendereco){
                return false;
            }
            try{
                $stmt5=$this->pdo->prepare("INSERT INTO tbl_adv (nome, ID_end_adv, ID_login) VALUES (:nome, :idendereco, :idlogin)");
                $stmt5->bindParam(":nome", $nome);
                $stmt5->bindParam(":idendereco", $idendereco['ID_end_adv']);
                $stmt5->bindParam(":idlogin", $idlogin['ID_login']); 
                if ($stmt5->execute()) {
                    if ($stmt5->rowCount() > 0) {
                        echo "<br>Parte 3 efetuada com sucesso<br>";
                        $res3 = $this->pdo->prepare("SELECT * from tbl_adv ORDER BY ID_adv DESC LIMIT 1");
                        $res3->execute();    
                        $idadv = $res3->fetch(PDO::FETCH_ASSOC);
                        var_dump($idadv);
                        return $idadv;
                    } else {
                        echo "<br>erro na parte 3<br>";
                        return false;
                    }  
                } else {
                    throw new PDOException("ERRO: Não foi possível executar a declaração sql na parte 3");
                }
            }catch (PDOException $erro3) {
                echo "Erro: " . $erro3->getMessage();
            }
        }
    
        public function CadastrarAdvogado4($bairro, $estado, $email, $senha, $escolha, $nome, $telefone) 
        {
            $idadv=$this->CadastrarAdvogado3($bairro, $estado, $email, $senha, $escolha, $nome);
            if(!$idadv){
                return false;
            }
            try{
                $stmt4 = $this->pdo->prepare("INSERT INTO tbl_tel_adv (ID_adv, telefone) VALUES (:idadv, :telefone)");
                $stmt4->bindParam(":idadv", $idadv['ID_adv']);
                $stmt4->bindParam(":telefone", $telefone);
    
                if ($stmt4->execute()) {
                    if ($stmt4->rowCount() > 0) {
                        echo "<br>Parte 4 efetuada com sucesso<br>";
                        return true;
                    } else {
                        echo "<br>Erro na parte 4<br>";
                        return false;
                    }  
                } else {
                    throw new PDOException("ERRO: Não foi possível executar a declaração sql na parte 4");
                }
            }catch (PDOException $erro4) {
                echo "Erro: " . $erro4->getMessage();
            }
        }

    }

    Class Casos{
        private $pdo;

        public function __construct() {
            try{
                //                      Banco de dados:     |  host:           |  usuario e senha:
                $this->pdo = new PDO("mysql:dbname=db_incluseus;host=localhost","root","root", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }
            catch(PDOexception $e){ #comando para notificar erros do PDO
                echo"Erro com o banco de dados: ". $e->getMessage();
                exit();
            }
            catch(exception $e){ #notificação de erros gerais
                echo"Erro generico: " . $e->getMessage();
                exit();
            }
        }
    
        //cadastrar usuarios
        //cadastrar casos relatados
    
        public function CadastraCasos($titulo, $descricao, $gravidade, $categorias, $idusuario){
            $cmd = $this->pdo->prepare("SELECT * FROM tbl_usuario WHERE ID_login = :idlogin");
            $cmd->bindValue(":idlogin", $idusuario);
            $cmd->execute();
            $idvtm = $cmd->fetch(PDO::FETCH_ASSOC);
            var_dump($idvtm);
            try {
                $cmd2 = $this->pdo->prepare("INSERT INTO tbl_caso(titulo_caso, descricao_caso, situacao, gravidade, ID_categ_direito, ID_usuario) VALUES (:titulo, :descricao, :situacao, :gravidade, :idcateg, :idusuario)");
                $cmd2->bindParam(":titulo", $titulo);
                $cmd2->bindParam(":descricao", $descricao);
                $cmd2->bindValue(":situacao", 1);
                $cmd2->bindParam(":gravidade", $gravidade);
                $cmd2->bindParam(":idcateg", $categorias);
                $cmd2->bindParam(":idusuario", $idvtm['ID_usuario']);
                
                if ($cmd2->execute()) {
                    if ($cmd2->rowCount() > 0) {
                        echo "<br>sucesso<br>";
                        return true;
                    }        
                    else {
                        echo "<br>Erro na parte 2<br>";
                        return false;
                    }
                    }else { 
                        throw new PDOException("Erro: Não foi possível executar a declaração sql na parte 2");
                    }
                } catch (PDOException $erro2) {
                            echo "Erro: " . $erro2->getMessage();
                        }
                    }

                    
        public function ExibirCasos($idusuario){
            $stmt = $this->pdo->prepare("SELECT * FROM tbl_caso WHERE ID_usuario = :idusuario");
            $stmt->bindParam(":idusuario", $idusuario);
            $stmt->execute();
            $caso = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $caso;
        }
        }

        
    
?>