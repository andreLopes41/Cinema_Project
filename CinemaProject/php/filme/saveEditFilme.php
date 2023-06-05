<?php

    include_once('../../database/dbconfig.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $genero = $_POST['genero'];
        $duracao = $_POST['duracao'];
        $distribuidor = $_POST['distribuidor'];
        $lancamento = $_POST['lancamento'];
        
        $sqlInsert = "UPDATE filme SET nome ='$nome', genero ='$genero', duracao ='$duracao', distribuidor ='$distribuidor', lancamento ='$lancamento' WHERE id = '$id'";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: filme.php');

?>