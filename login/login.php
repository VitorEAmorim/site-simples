
<html>
    <head><title>Login</title></head>
    <meta charset="utf-8">
    <link href="../style/style.css" rel="stylesheet">
    <link href="../style/style_login.css" rel="stylesheet">
    <body>
        <main>
            <div class="aligment">
                <img src="https://www.link-of-the-day.com/wp-content/uploads/2019/06/190611_Willian-Santiago_06-1024x683.jpg">
                <div class="quad_login">
                        <header class="header_login">
                            <h1>Boas-Vindas!</h1>
                        </header>
                    <div class="formulario">      
                        <div class="Border-login" width= 784px height= 408px>
                            <form name="l_log" method="post" action="../Banco de dados/verify.php"> 
                                <label for="l_nome">Nome de usuário:</label><br>
                                <input type="text" id="nome" name="l_nome"><br>
                                <label for="l_senha">Senha:</label><br>
                                <input type="password" id="senha" name="l_senha"><br>
                                <div>
                                <button type="submit" class ="botao_entrar" value= "Entrar">
                                    <div>Entrar</div>
                                </button>
                                <span class="texto_registre">Precisa se registrar? <a href="../registrar.php" class="link_registre">Registre-se</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>