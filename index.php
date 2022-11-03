<!DOCTYPE html>

<html>
    <head><title>Início</title></head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
    <body>
        <header class="top_bar">
            <div class="logo">
                <a href="index.html"><img src="logo_site.png" alt="EmprestaPUC"></a> 
            </div>
            <div class="login_link">
                <a href="login.html">Login</a>
                <p>||</p>
                <a href="registrar.html">Registrar</a>
            </div>
        </header>
        <main class="proposta">
            <h3>Descrição</h3>
            <p>Esse site foi criado para auxiliar os alunos da PUC na hora de emprestar materiais, diversos tipos de materiais, de estudo,
                de programas, aquivos e muito mais.<br>
                Crie sua conta e comece agora a compartilhar.
            </p>
            <table class="lista_emprestados" border="1">
                <tr>
                    <th>Nome Produto</th>
                    <th>Data</th>
                    <th>Destinatário</th>
                    <th>Contato</th>
                </tr>
                <tr>
                    <td> Lápis</td>
                    <td> 30/10/22</td>
                    <td> Mateus</td>
                    <td> +5541395644875</td>
                </tr>
            </table>
        </main>  

    <a class="novo" href="#demo_modal">+ Novo</a>
        
    <div id="demo_modal" class="modal">
        <div class="modal_conteudo">
            <label for="n_prod">Produto:</label><br>
            <input type="text" id="n_prod" name="n_prod"><br>

            <label for="date">Data:</label><br>
            <input type="date" id="date" name="date"><br>

            <label for="n_dest">Destinatário:</label><br>
            <input type="text" id="n_dest" name="n_dest"><br>

            <label for="tel_dest">Contato:</label><br>
            <input type="tel" id="tel_dest" name="tel_dest"><br>
            <div><a href="#" class="modal_fechar">Fechar</a>
            <a href="#" class="modal_fechar">Registrar</a>
            </div>
        </div>
    </div>

    </body>

</html>