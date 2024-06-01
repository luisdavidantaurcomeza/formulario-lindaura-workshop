<?php

if(isset($_POST['submit']))
{
/*     print_r($_POST['nome ']);
    print_r($_POST['email']);
    print_r($_POST['telefone']);
    print_r($_POST['genero']);
    print_r($_POST['data_nascimento']);
    print_r($_POST['turma']);
     */
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $turma = $_POST['turma'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,turma) 
    VALUES('$nome','$email','$telefone','$sexo','$data_nasc','$turma' )");



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DadosPessoas | GN</title>
    
</head>
<body>
    <div class="box">
        <form action="Workshop.php" method="POST">
            <fieldset>
                <legend><b>Participantes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Gênero:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="turma" id="turma" class="inputUser" required>
                    <label for="turma" class="labelInput">Turma</label>
                </div>    
                <br><br>            
        
                <br><br>
                
                <br><br>
                <input type="submit" name="submit" id="submit">
            </section>
            </fieldset>
        </form>
    </div>
</main>

<script src="js/Main.js"></script>
</body>
</html>