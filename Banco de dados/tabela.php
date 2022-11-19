<?php

include "connectBd.php";

$querySelect = $con->query('select * from emprestados');
while($registros = $querySelect->fetch_assoc()):
    $coditem = $registros['id_user'];
    $nome = $registros['Nome_item'];
    $date = $registros['data_ini'];
    $dest = $registros['nome_destin'];
    $cont = $registros['contat_destin'];
    if ($_SESSION['cod'] == $coditem){
        echo "<tr>";
        echo "
        <td>$nome</td>
        <td>$date</td>
        <td>$dest</td>
        <td>$cont</td>";
        echo "</tr>";
    }
endwhile;


?>