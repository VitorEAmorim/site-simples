<?php

    include "connectBd.php";

    $lnome = $_POST["l_nome"];    
    $lsenha = $_POST["l_senha"];



    $sql = "SELECT * FROM registros WHERE username = '$lnome' AND senha = '$lsenha'";
    $sql_query = $con -> query($sql) or die("Falha na execução:" . $con -> error);
    $quantidade = $sql_query -> num_rows;


    if ($quantidade == 1) {
        $usuario = $sql_query-> fetch_assoc();
        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['cod'] = $usuario['cod'];
        $_SESSION['nome'] = $usuario['nome'];
        header ("Location: ../index.php");

 
    } else {
        echo "Não correspondente a nenhum usuário!";
    }
    

    $res = mysqli_query($con, $sql);

    mysqli_close($con);




?>