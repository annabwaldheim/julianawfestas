<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="bootstrap-5.3.3-dist.zip/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styleee.css" rel="stylesheet" type="text/css">
    <script src="index.js"> </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
    <title> JWF - Cadastro</title>
</head>
<body>
<header>
  <div class="flex-container">
    <div><h1 id="title"> JulianaW Festas</h1></div>
      <div class="pesquisa" type="post">
        <input id="boxPesquisa" type="text" name="textPesquisa" placeholder="Pesquisar" >
        <button type="button" id="buttonPesquisa" class="btn btn-light">
          <img id="imgPesquisa" src="img/pesquisa-de-lupa.png" alt="">
        </button>
      </div>
      <div id="menu">
        <button class="btn btn-outline-* menu-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <svg width="3rem" height="3rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 18L20 18" stroke="#FBEBF2" stroke-width="1" stroke-linecap="round"/>
            <path d="M4 12L20 12" stroke="#FBEBF2" stroke-width="1" stroke-linecap="round"/>
            <path d="M4 6L20 6" stroke="#FBEBF2" stroke-width="1" stroke-linecap="round"/>
          </svg>
        </button>
      </div>
      <div class="offcanvas offcanvas-end menu-body" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasRightLabel">
            <a class="menu-conta-header" href="login.php"> Login </a>
            <a class="menu-conta-header" href="cadastro.php"> Cadastre-se </a>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="menu-conta">
            <ol class="menu-conta">
              <li class="menu-conta-item"><a href="statichome.php">Início</a></li>
              <li class="menu-conta-item"><a href="carrinho.php">Carrinho</a></li>
              <li class="menu-conta-item"><a href="kits.php">Kits</a></li>
              <li class="menu-conta-item"><a href="catalogo.php">Catálogo</a></li>
              <li class="menu-conta-item"><a href="sobre.php">Sobre nós</a></li>
            </ol>
            <img class="menu-img" src="img/logo.png" alt="">
        </div>
      </div>
    </div>
  </div>
</header>
<section>
  <div class="container">
    <div class="cadastro-menu">
      <h2> Cadastro </h2>
      <form class="cadastro-form" method="POST" action="cadastrar.php">
        <div class="cadastro-left">
          <div class="nome-cadastro">
            <label>Nome:</label><br>
            <input name="nome" type="text" class="cadastro-input" >
          </div>
          <div class="nome-cadastro">
            <label for="exampleDropdownFormPassword1">Senha:</label><br>
            <input name="senha" type="password" class="cadastro-input" id="exampleDropdownFormPassword1" >
          </div>
          <div class="nome-cadastro">
            <label>Endereço:</label><br>
            <input name="endereco" type="text" class="cadastro-input" placeholder=" Rua, complemento e bairro" >
          </div>
        </div>
        <div class="cadastro-right">
          <div class="nome-cadastro">
            <label for="exampleDropdownFormEmail1">E-mail:</label> <br>
            <input name="email" type="email" class="cadastro-input" id="exampleDropdownFormEmail1" >
          </div>
          <div class="nome-cadastro">
            <label for="exampleDropdownFormPassword1">Confirme a senha:</label><br>
            <input name="senha2" type="password" class="cadastro-input" id="exampleDropdownFormPassword2" >
          </div>
          <div class="nome-cadastro">
            <label>Cidade:</label><br>
            <input name="cidade" type="text" class="cadastro-input" >
          </div>
        </div>
        <div class="cadastro-trio">
          <div class="nome-cadastro cadastro-left">
            <label>CPF:</label><br>
            <input name="cpf" type="text" class=" cadastro-input" id="verificarCPF" placeholder=" ___.___.___-__">
          </div>
          <div class="nome-cadastro cadastro-input-trio">
            <label>Data de Nascimento:</label><br>
            <input name="dataNasc" type="date" class=" cadastro-input" >
          </div>
          <div class="nome-cadastro cadastro-right">
            <label>Telefone:</label><br>
            <input name="telefone" type="tel" class="cadastro-input" placeholder=" (__) _____-____">
          </div>
        </div>
        <button type="submit" class="cadastro-button"> Concluir cadastro </button>
      </form>
      <div class="cadastro-bottom">
        <a class="cadastro-bottom-item" href="login.php" > Já tem uma conta? Faça login</a>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="footer">
        <h6 class="footer-text"> Contato: </h6>
        <p class="footer-text"> @julianawfestas </p>
        <p class="footer-text"> (21) 91234-5678 </p>
        <p class="footer-text"> email@gmail.com </p>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>