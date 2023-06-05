<?php
    if(!empty($_GET['id'])) {

        include_once('../../database/dbconfig.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM adm WHERE id = $id";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0) {

            while($user_data = mysqli_fetch_assoc($result)) {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
            }
            
        }

        else {
            header('Location: admin.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Adm | Movie Time</title>

        <link rel="stylesheet" type="text/css" href="../../css/editAdmin.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </head>
    <body>
        <a href="admin.php" class="btn btn-danger">Voltar</a>

        <div class="box">
            <form action="saveEditAdm.php" method="POST">
                <h2>Editar | Adm</h2>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome Completo</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelInput">Email</label>       
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Senha</label>       
                </div>
                <br>
                <input type="hidden" name="id" value="<?php echo $id ?>" >
                <input type="submit" name="update" id="update" value="Salvar" >

        
            </form>
        </div>
        
    </body>
</html>