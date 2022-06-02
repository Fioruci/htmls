<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/base.css">
    <script defer src="../js/login.js"></script>
    <title> Wavy - Login </title>
</head>

<body>
    <main class="login">
        <p class="alerta">"Não é funcional, só o JS que te retorna um token <br>
        ao fazer a requisição na API." <br>
        Aí abre o console do F12, clica pra fazer login e a magia ocorre :') </p>


        <div class="login_container">
            <h1 class="login_title">
                Iniciar Sessão
            </h1>
            <form action="#" class="login_form">
                <input type="email" name="inp_email" id="inp_email" placeholder="e-Mail: eve.holt@reqres.in" class="login_input">
                <span class="login_input-border"></span>

                <input type="password" name="inp_pass" id="inp_pass" placeholder="Senha: cityslicka" class="login_input">
                <span class="login_input-border"> </span>

                <button type="submit" class="login_submit" id="but_submit"> Fazer Login </button>
                <a href="#" class="login_reset"> Esqueci a senha </a>
                
            </form>
        </div>

    </main>
    
</body>
</html>