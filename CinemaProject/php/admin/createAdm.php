<?php
    if(isset($_POST['submit'])) {

        include_once('../../database/dbconfig.php');

        $nome = isset($_POST['nome'])?$_POST['nome']:'N/A';
        $email = isset($_POST['email'])?$_POST['email']:'N/A';
        $senha = isset($_POST['senha'])?$_POST['senha']:'N/A';

        $result = mysqli_query($conexao, "INSERT INTO adm(nome, email, senha) VALUES ('$nome', '$email','$senha')");

        header('Location: ../../login.html');

    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário Admin | Movie Time</title>

        <link rel="stylesheet" type="text/css" href="../../css/createAdmin.css">
        <script type="text/javascript" src="../../js/createAdmin.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </head>
    <body>
        <a href="../../index.html" class="btn btn-danger">Voltar</a>

        <div class="box">
            <form action="createAdm.php" method="POST">
                <h2>Cadastrar | ADM</h2>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>       
                </div>
                <br>
                <input type="submit" name="submit" id="submit" onclick=" return validarCampos()">

        
            </form>
        </div>
        
    </body>
</html>