<?php   
    include_once "../conexao.php";
    
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }else{
        $id = 0;
    }

    if ($id){
        $campos = array();
        
        if(!empty($_POST['nome_completo'])){
            $nome = $_POST['nome_completo'];
            $campos[]= " nome_completo='$nome'";
        }
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
            $campos[]=" email='$email'";
        }
        if(!empty($_POST['telefone'])){
            $telefone = $_POST['telefone'];
            $campos[]=" telefone='$telefone'";
        }
        if(!empty($_POST['senha'])){
            $senha = hash('sha256', $_POST['senha']);
            $campos[]=" senha='$senha'";
        }
        
        $sql = 'UPDATE administrador SET' .implode(',', $campos). ' WHERE id = ' . $id;
    }else {
        $nome = $_POST['nome_completo'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = hash('sha256', $_POST['senha']);
        
        $sql = 'INSERT INTO administrador (nome_completo, email, telefone, senha) VALUES ("'. $nome .'", "'. $email .'", "'.$telefone.'", "'.$senha.'")';
    }

    // var_dump($sql);
    $connect->exec($sql);

    Header('Location: adm.php');
?>