<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.3-dist.zip\bootstrap-5.3.3-dist\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="index.js"> </script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
    <title> JWF - Login</title>
</head>
<body>
<section>
    <div class="container">
        <div class="login-menu">
            <a href="statichome.php"><h2> JulianaW Festas </h2></a>
            <form class="login-form">
                <div class="nome-login">
                    <label for="exampleDropdownFormEmail1">E-mail:</label> <br>
                    <input type="email" class="login-input" id="exampleDropdownFormEmail1" >
                </div>
                <div class="nome-login">
                    <label for="exampleDropdownFormPassword1">Senha:</label><br>
                    <input type="password" class="login-input" id="exampleDropdownFormPassword1" >
                </div>
                <div class="login-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="login-check-label" for="dropdownCheck"> Lembre-se de mim </label>
                </div>
                <button type="submit" class="login-button"> Login </button>
            </form>
            <div class="login-bottom">
                <a class="login-bottom-item" href="#" > Esqueceu a senha?</a> <br>
                <a class="login-bottom-item" href="cadastro.php" > Cadastre-se </a>
            </div>
        </div>
    </div>
</section>
</body>
</html>