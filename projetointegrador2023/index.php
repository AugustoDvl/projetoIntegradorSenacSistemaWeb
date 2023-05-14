
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>
    <div id="containerprincipal">
        <img src="imgs/LOGO 2.png" alt="">
        <h1>Digite seu usuario:</h1>
        <form id="containerprincipal" method="post" action="login.php">

            
            <input type = "text" name = "usuario" placeholder = "Usuario">
            <h1>Digite sua senha:</h2>
            <input type= "password" name = "senha" placeholder = "Senha">
            <input class="entrar" type= "submit" value = "Entrar">
            <p>Ainda não possui um cadastro?</p>
            <a href="cadastro.php"><p class = "ancora">Cadastrar novo usuario</p></a>
            
        
        </form>
            
        
    </div>
    <script src="./javascript/javascript.js"></script>
</body>
</html>