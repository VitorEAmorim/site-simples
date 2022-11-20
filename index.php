<?php
    include "Banco de dados/connectBd.php";
    include "login/protect.php";
?>

<html>
    <head><title>Início</title></head>
    <meta charset="utf-8">
    <link href="style/style.css" rel="stylesheet">
    <body>
        <header class="top_bar">
            <div class="logo">
                <a href="index.php"><img src="logo_site.png" alt="EmprestaPUC"></a> 
            </div>
            <div class="login_link">
                <a href="login/logout.php">Sair</a>
            </div>
        </header>
        <main class="proposta">
            <header><h3>Descrição</h3>
            <h4>Olá, <?php echo $_SESSION['nome']; ?></h4>
            <p>Esse site foi criado para auxiliar os alunos da PUC na hora de emprestar materiais, diversos tipos de materiais, de estudo,
                de programas, aquivos e muito mais.<br>
                Crie sua conta e comece agora a compartilhar.
            </p></header>
            <article>
                <header><h4>Itens que você emprestou:</h4></header>
                <table class="lista_emprestados" border="1">
                    <tr>
                        <th>Nome Produto</th>
                        <th>Data</th>
                        <th>Destinatário</th>
                        <th>Contato</th>
                    </tr>
                    <?php include "Banco de dados/tabela.php";?>
                </table>
                <header><h4>Itens lhe emprestaram:</h4></header>
                <table class="lista_emprestados" border="1">
                    <tr>
                        <th>Nome Produto</th>
                        <th>Data</th>
                        <th>Dono</th>
                        <th>Contato</th>
                    </tr>
                    <?php include "Banco de dados/tabela2.php";?>
                </table>
            </article>
        </main>  

    <a class="novo" href="#demo_modal">+ Novo</a>
        
    <div id="demo_modal" class="modal">
        <div class="modal_conteudo">
            <form name= "iten" method="post" action="itens.php">
                <label for="n_prod">Produto:</label><br>
                <input type="text" id="n_prod" name="n_prod"><br>

                <label for="n_dest">Destinatário:</label><br>
                <select type="n_dest" id="n_dest" name="n_dest">
                    <option value="" disabled selected>Selecione o destinatário</option>
                    <?php include "Banco de dados/selectFrinds.php"; ?></select>

                <label for="tel_dest">Contato:</label><br>
                <input type="tel" id="tel_dest" name="tel_dest" data-mask="(00) 0000-0000" data-mask-selectonfocus="true"><br>

                <div>
                <a href="#" class="modal_fechar">Fechar</a>
                <button type="submit" class="modal_fechar"><a href="index.php"><div>Registrar</div></a></button>
                </div>
            </form>
        </div>
    </div>
    </body>

</html>
