<?php
    if(!empty($_GET['id'])) {

        include_once('dbconfig.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM filme WHERE id = $id";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0) {

            while($user_data = mysqli_fetch_assoc($result)) {
                $nome = $user_data['nome'];
                $genero = $user_data['genero'];
                $duracao = $user_data['duracao'];
                $distribuidor = $user_data['distribuidor'];
                $lancamento = $user_data['lancamento'];
            }
            
        }

        else {
            header('Location: filme.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Filme | Movie Time</title>

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

            #update{
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

            #update:hover{
                background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
            }

            a{
                width: 8%;
                margin-top: 20px;
                margin-left: 20px; 
            }

        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </head>
    <body>
        <a href="filme.php" class="btn btn-danger">Voltar</a>

        <div class="box">
            <form action="saveEditFilme.php" method="POST">
                <h2>Alterar | Filme</h2>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="genero" id="genero" class="inputUser" value="<?php echo $genero ?>" required>
                    <label for="genero" class="labelInput">Gênero</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="number" name="duracao" id="duracao" class="inputUser" value="<?php echo $duracao ?>" required>
                    <label for="duracao" class="labelInput">Duração (min)</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="distribuidor" id="distribuidor" class="inputUser" value="<?php echo $distribuidor ?>" required>
                    <label for="distribuidor" class="labelInput">Distribuidor</label>      
                </div>
                <br>
                    <label for="lancamento"><b>Lancamento</b></label>
                    <input type="date" name="lancamento" id="lancamento" value="<?php echo $lancamento ?>" required>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>" >
                <input type="submit" name="update" id="update" value="Salvar" >

        
            </form>
        </div>
        
    </body>
</html>