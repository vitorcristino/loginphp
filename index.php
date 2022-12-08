<?php 

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,senha) 
        VALUES ('$nome','$email','$senha')");

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscreva-se</title>
</head>
<body>
   
    <div class="main-login">
        <div class="left-login">
            <div class="center">
                <h1>INSCREVA-SE<br></h1>
            </div>
            <h1>e faça parte do nosso time</h1>
            <img src="astronaut-animate.svg" class="left-login-image">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>INSCREVA-SE</h1>
                <form name="formuser" action="index.php" method="POST">
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome"  placeholder="Nome:" id="nome" required>
                </div>
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="email" name="email"  placeholder="E-mail:" id="email" maxlength="110" required>
                </div>
                <div class="textfield"> 
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha:" id="senha" keyboardType="numeric" maxlength="10" required>
                </div>
                <div class="textfield">
                    <label for="repetir_senha">Confirmar senha</label>
                <input type="password" name="repetir_senha" placeholder="Repetir senha:" id="repetir_senha" maxlength="10" required>
                </div>
                <span id="aviso"></span>
                <button type="submit" name="submit" class="btn-login" id="submit" onclick="return validar()">Inscrever-se</button>
            </div>
        </form>
        
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>