<?php
require("conectar.php");

// Recolher dados do formulário, data e hora
$nome=$_POST['nome'];
$mensagem=$_POST['mensagem'];
$data= date('Y-m-d');
$hora= date('H:i:s');

// inserir registo na tabela / BD
$sqlinsert = "INSERT INTO livrovisitas (id_mensagem, nome, mensagem, data, hora) VALUES ('', '$nome', '$mensagem', '$data', '$hora')";

if (mysqli_query($mysqli, $sqlinsert)) {
    echo " <br> Novo Registo Inserido";
} else {
    echo "<br> Erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($mysqli);

echo "<br> Na data $data e na hora $hora<br>$nome disse:<br>$mensagem";
?>