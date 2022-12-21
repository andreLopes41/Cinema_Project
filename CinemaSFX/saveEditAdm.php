<?php

    include_once('dbconfig.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sqlInsert = "UPDATE adm SET nome ='$nome', senha ='$senha', email ='$email' WHERE id = '$id'";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: admin.php');

?>