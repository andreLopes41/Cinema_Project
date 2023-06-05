<?php
    if(!empty($_GET['id'])) {

        include_once('../../database/dbconfig.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM cliente WHERE id = $id";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0) {

            while($user_data = mysqli_fetch_assoc($result)) {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cpf = $user_data['cpf'];
            }
            
        }

        else {
            header('Location: cliente.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Cliente | Movie Time</title>

        <link rel="stylesheet" type="text/css" href="../../css/editCliente.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </head>
    <body>
        <a href="cliente.php" class="btn btn-danger">Voltar</a>

        <div class="box">
            <form action="saveEditCliente.php" method="POST">
                <h2>Editar | Cliente</h2>
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
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>      
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio"  class="form-check-input"   id="feminino" name="sexo" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : 'N/A';?> >
                <label class="form-check-label" for="feminino"> Feminino</label>
                <br>
                <input type="radio" class="form-check-input"   id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : 'N/A';?> >
                <label class="form-check-label" for="masculino"> Masculino</label>
                <br>               
                    <label for="data_nascimento"><b>Data de Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>"  required>      
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf ?>"  required>  
                    <label for="cpf" class="labelInput">CPF</label>   
                </div>
                <br>
                <input type="hidden" name="id" value="<?php echo $id ?>" >
                <input type="submit" name="update" id="update" value="Salvar" >

        
            </form>
        </div>
        
    </body>
</html>