<html>
    <head><title>Registrar</title></head>
    <meta charset="utf-8">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/style_registro.css" rel="stylesheet">
    <body>
        <main>
            <div class="aligment">
                <div class="quad_login">
                    <div class="formulario">
                        <form name= "cad" method="post" action="log.php">
                            <header>
                                <h1>Boas-Vindas!</h1>
                            </header>
                            <label for="nome">Nome:</label>
                            <input type="text" id="r_nome" name="nome">
                            <label for="username">Nome de usuário:</label> 
                            <input type="text" id="r_username" name="username">
                            <label for="email">Email:</label>
                            <input type="email" id="r_email" name="email">
                            <label for="tel">Celular:</label>
                            <input type="tel" id="r_tel" name="tel">
                            <label for="nome">Data nascimento:</label>
                            <input type="date" id="r_date" name="date" min="1910-01-01" max="2020-01-01">
                            <label for="senha">Senha:</label>
                            <input type="password" id="r_senha" name="senha">
                            <label for="rsenha">Repita senha:</label>
                            <input type="password" id="r_rsenha" name="rsenha" minlength="8">
                            <button type="submit" class ="botao_enviar">
                                <div>Enviar</div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>
