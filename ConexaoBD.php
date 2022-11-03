<?php

$host = '127.0.0.1';
$usuario = 'root';
$senha = '';
$bd = 'facul';

$conexao = new mysqli($host, $usuario, $senha, $bd) or die(mysqli_errno());
$conexao->set_charset('utf8');
