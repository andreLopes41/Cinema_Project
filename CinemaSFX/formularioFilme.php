<?php
    if(isset($_POST['submit'])) {

        include_once('dbconfig.php');

        $nome = isset($_POST['nome'])?$_POST['nome']:'N/A';
        $genero = isset($_POST['genero'])?$_POST['genero']:'N/A';
        $duracao = isset($_POST['duracao'])?$_POST['duracao']:'N/A';
        $distribuidor = isset($_POST['distribuidor'])?$_POST['distribuidor']:'N/A';
        $lancamento = isset($_POST['lancamento'])?$_POST['lancamento']:'N/A';

        $result = mysqli_query($conexao, "INSERT INTO filme(nome, genero, duracao, distribuidor, lancamento) VALUES ('$nome', '$genero','$duracao', '$distribuidor', '$lancamento')");

        header('Location: admin.php');

    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário Filme | Movie Time</title>

        <style>

            body{
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
                margin-top: 20px;
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
                var genero = document.getElementById("genero");
                var duracao = document.getElementById("duracao");
                var distribuidor = document.getElementById("distribuidor");

                if (nome.value.length < 3 ) {

                    alert("Inválido, favor digite um nome com mais de 3 caracteres");
                    return false;
                }

                if (genero.value.length < 4) {

                    alert("Inválido, favor digite um Gênero com mais de 4 caracteres");
                    return false;
                }

                if (duracao.value < 1 || duracao.value > 999) {

                    alert("Inválida, favor digite uma Duração entre 1 e 999 Minutos");
                    return false;
                }

                if (distribuidor.value.length < 2) {

                alert("Inválido, favor digite um distribuidor com no mínimo 2 digitos");
                distribuidor.value.focus();
                return false;
                }

                
            }

        </script> 

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </head>
    <body>
        <a href="admin.php" class="btn btn-danger">Voltar</a>

        <div class="box">
            <form action="formularioFilme.php" method="POST">
                <h2>Inserir | Filme</h2>
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