<?php
    if(isset($_POST['submit'])) {

        include_once('dbconfig.php');

        $nome = isset($_POST['nome'])?$_POST['nome']:'N/A';
        $email = isset($_POST['email'])?$_POST['email']:'N/A';
        $senha = isset($_POST['senha'])?$_POST['senha']:'N/A';

        $result = mysqli_query($conexao, "INSERT INTO adm(nome, email, senha) VALUES ('$nome', '$email','$senha')");

        header('Location: login.html');

    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário Admin | Movie Time</title>

        <style>

            body{
                background-size: 50%;
                background-image: url(https://www.welovesolo.com/wp-content/uploads/vector/46/Movie-time-design-elements-vector-backgrounds-04.jpg);
                height: 100%;
            }
            h2{
                color: dodgerblue;
                text-align: center;
            }

            .box{
                color: white;
                margin: 0 auto;
                background-color: rgba(0, 0, 0, 0.8);
                padding: 15px;
                border: 6px solid dodgerblue;
                border-radius: 15px;
                width: 25%;
                margin-top: 100px;
            }
            .inputBox{
                position: relative;
            }

            .inputUser{
                background: none;
                border: none;
                border-bottom: 1px solid white;
                outline: none;
                color: white;
                font-size: 15px;
                width: 100%;
                letter-spacing: 2px;
            }

            .labelInput{
                position: absolute;
                top: 0px;
                left: 0px;
                pointer-events: none;
                transition: .5s;
            }

            .inputUser:focus ~ .labelInput,.inputUser:valid ~ .labelInput{
                top: -20px;
                font-size: 12px;
                color: dodgerblue;
            }

            #data_nascimento{
                border: none;
                padding: 6px;
                border-radius: 10px;
                outline: none;
                font-size: 15px;
            }

            #submit{
                background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
                width: 100%;
                border: none;
                padding: 15px;
                color: white;
                font-size: 15px;
                cursor: pointer;
                border-radius: 10px;
                font-weight: bold;
            }

            #submit:hover{
                background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
            }

            a{
                width: 8%;
                margin-top: 20px;
                margin-left: 20px; 
            }

        </style>

        <script type="text/javascript">

            function validar() {
                var nome = document.getElementById("nome");
                var email = document.getElementById("email");
                var senha = document.getElementById("senha");

                if (nome.value.length < 3 ) {

                    alert("Inválido, favor digite um nome com mais de 3 caracteres");
                    return false;
                }

                if (email.value.length < 8) {

                    alert("Inválido, favor digite um Email com mais de 8 caracteres");
                    return false;
                }

                if (senha.value.length < 4 || senha.value.length > 18) {

                    alert("Inválida, favor digite uma Senha entre 4 e 18 caracteres");
                    return false;
                }

            }

        </script> 

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </head>
    <body>
        <a href="home.html" class="btn btn-danger">Voltar</a>

        <div class="box">
            <form action="formularioAdm.php" method="POST">
                <h2>Criar ADM</h2>
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
                <input type="submit" name="submit" id="submit" onclick=" return validar()">

        
            </form>
        </div>
        
    </body>
</html>