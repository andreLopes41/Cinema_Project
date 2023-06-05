<?php

    include_once('../../database/dbconfig.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        
        $sqlInsert = "UPDATE cliente SET nome ='$nome', senha ='$senha', email ='$email', telefone ='$telefone', sexo ='$sexo', data_nasc ='$data_nasc', cpf ='$cpf' WHERE id = '$id'";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: cliente.php');

?>