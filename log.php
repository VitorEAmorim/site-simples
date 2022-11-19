<?php

    include "Banco de dados/connectBd.php";

    $rnome = $_POST["nome"];    
    $rsenha = $_POST["senha"];
    $rusername = $_POST["username"];
    $rtel = $_POST["tel"];
    $remail = $_POST["email"];
    $rstatus=1;

    $sql = "INSERT INTO registros VALUES (NULL, '$rnome', '$rusername','$rsenha', '$remail', '$rtel', '$rstatus' )";
    $res = mysqli_query($con, $sql);
    
    header("location: login.php");


    mysqli_close($con);




?>