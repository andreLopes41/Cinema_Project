<?php
    if(isset($_POST['submit'])) {

        include_once('../../database/dbconfig.php');

        $nome = isset($_POST['nome'])?$_POST['nome']:'N/A';
        $genero = isset($_POST['genero'])?$_POST['genero']:'N/A';
        $duracao = isset($_POST['duracao'])?$_POST['duracao']:'N/A';
        $distribuidor = isset($_POST['distribuidor'])?$_POST['distribuidor']:'N/A';
        $lancamento = isset($_POST['lancamento'])?$_POST['lancamento']:'N/A';

        $result = mysqli_query($conexao, "INSERT INTO filme(nome, genero, duracao, distribuidor, lancamento) VALUES ('$nome', '$genero','$duracao', '$distribuidor', '$lancamento')");

        header('Location: ../admin/admin.php');

    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário Filme | Movie Time</title> 

        <link rel="stylesheet" type="text/css" href="../../css/createFilme.css">
        <script type="text/javascript" src="../../js/createFilme.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </head>
    <body>
        <a href="../admin/admin.php" class="btn btn-danger">Voltar</a>

        <div class="box">
            <form action="createFilme.php" method="POST">
                <h2>Cadastrar | Filme</h2>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="genero" id="genero" class="inputUser" required>
                    <label for="genero" class="labelInput">Gênero</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="number" name="duracao" id="duracao" class="inputUser" required>
                    <label for="duracao" class="labelInput">Duração (min)</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="distribuidor" id="distribuidor" class="inputUser" required>
                    <label for="distribuidor" class="labelInput">Distribuidor</label>      
                </div>
                <br>
                    <label for="lancamento"><b>Lancamento</b></label>
                    <input type="date" name="lancamento" id="lancamento" required>      
                <br><br>
                <input type="submit" name="submit" id="submit" onclick=" return validar()">

            </form>
        </div>
        
    </body>
</html>