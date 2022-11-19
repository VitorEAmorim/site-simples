<?php

include "connectBd.php";

$querySelect = $con->query('SELECT * FROM registros');

while($registros = $querySelect->fetch_assoc()):
    $username= $registros['username'];
        echo "<option value = '$username'>$username<option>";
endwhile;


?>