<?php
    include "Banco de dados/connectBd.php";
    session_start();

    date_default_timezone_set('America/Sao_Paulo');

    $nprod = $_POST["n_prod"];
    $codUser = $_SESSION['cod'];
    $date = date('d/m/Y');
    $ndest = $_POST["n_dest"];
    $teldest = $_POST["tel_dest"];


    $sqlcod = "SELECT * FROM registros WHERE username = '$ndest'";
    $sql_query = $con -> query($sqlcod);
    $cod_dono = $sql_query-> fetch_assoc();

    $cod_don = $cod_dono["cod"];

    $sqlname = "SELECT username FROM registros WHERE username = '$ndest'";
    $sql_query2 = $con -> query($sqlname);

    $quantidade = $sql_query2 -> num_rows;

    $res = mysqli_query($con, $sqlcod);

    if ($quantidade == 1){
        $sql = "INSERT INTO emprestados VALUES (NULL, '$codUser', '$nprod','$date', '$ndest', '$teldest', '$cod_don', '')";
        $res = mysqli_query($con, $sql);
        header("location: index.php");
    } else {
        echo "<h5>'$ndest' não foi encontrado!</h5>";
    }

    mysqli_close($con);

?>