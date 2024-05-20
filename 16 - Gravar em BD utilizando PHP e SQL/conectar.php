<?php
$hostname='localhost';
$username='root';
$password='';
$basedados='bd1';

// Ligação à Base de dados
$mysqli = new mysqli ($hostname, $username, $password, $basedados);

// Check connection
if (!$mysqli) {
    die("<br> Falha na Ligação à Base de Dados <br>" . mysqli_connect_error());
}
echo "------------- Ligação à Base de Dados Realizada-----------------";
echo '<br>';

?>