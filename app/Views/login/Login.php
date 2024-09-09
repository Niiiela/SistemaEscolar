<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="app.css" />
  </head>
  <body>
    <div class="login-box">
        <div class="text-center mb-3">
            <img src="Logo.png" class="logo-img" alt="Logo do sistema" />
        </div>
      
      <form action="#" method="post">
        <div class="mb-3">
            <select name="select-sistema" id="select-sistema" class="form-select">
                <option value="">Selecione uma opção:</option>
                <option value="">Gestor</option>
                <option value="">Professor</option>
                <option value="">Aluno</option>
              </select>
        </div>

        <hr class="line">

        <div class="mb-3">
            <input class="form-control" type="email" id="text-username" name="text-username" placeholder="Email" />
        </div>
        <div class="mb-3">
            <input class="form-control" type="password" id="text-password" name="text-password" placeholder="Senha"  />
        </div>
        <div class="mb-3">
            <input class="btn-login" type="submit" value="Entrar" />
        </div>
      </form>
      <div class="text-center">
            <p>Não tem conta? <a class="login-link" href="#">Cadastrar</a></p>
            <p><a class="login-link" href="#">Esqueceu a senha</a></p>
        </div>
    </div>

    <!-- Bootstrap 5 js-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
