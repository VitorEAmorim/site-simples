<?php

include "connectBd.php";

$querySelect = $con->query('select * from emprestados');
while($registros = $querySelect->fetch_assoc()):
    $coditem = $registros['cod_destin'];
    $nome = $registros['Nome_item'];
    $date = $registros['data_ini'];
    $dono = $registros['nome_destin'];
    $cont = $registros['contat_destin'];

    $sqlname = "SELECT username FROM registros WHERE cod = '$coditem'";
    $sqltel = "SELECT tel FROM registros WHERE cod = '$coditem'";
    $telquery = $con -> query($sqltel);
    $tel = $telquery -> fetch_assoc();
    $tel1 = $tel['tel'];

    $sql_query = $con -> query($sqlname) or die("Falha na consulta:" . $con -> error);
    $nome_don = $sql_query-> fetch_assoc();
    $nome_dono = $nome_don['username'];


    if ($_SESSION['cod'] == $coditem){
        echo "<tr>";
        echo "
            <td>$nome</td>
            <td>$date</td>
            <td>$nome_dono</td>
            <td>$tel1</td>";
        echo "</tr>";
    }
endwhile;


?>