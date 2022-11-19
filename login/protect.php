<?php 

if (!isset($_SESSION)){
    session_start();
};

if (!isset($_SESSION['cod'])){
    die("Você não pode acessar essa página, logue primeiro!. <p><a href='login/login.php'>Logar</a></p>");
}

?>