<?php
// Dados do banco

$dbhost   = 'localhost';   #Nome do host
$db       = 'db1';   #Nome do banco de dados
$user     = 'root@localhost'; #Nome do usuário
$password = '';   #Senha do usuário

// Dados da tabela

$tabela = 'livrovisitas';    #Nome da tabela
$campo1 = 'id_mensagem';  #Nome do campo da tabela
$campo2 = 'nome';  #Nome de outro campo da tabela
$campo3 = 'mensagem';  #Nome de outro campo da tabela
$campo4 = 'data';  #Nome de outro campo da tabela
$campo5 = 'hora';  #Nome de outro campo da tabela
 

mysqli_connect($dbhost,$user,$password) or die ('Não foi possível a conexão com o servidor!')
mysqli_select_db($db) or die ('Não foi possível selecionar o banco de dados!')

$instrucaoSQL = 'SELECT $campo1, $campo2 FROM $tabela ORDER BY $campo1';
$consulta = mssql_query($instrucaoSQL);
$numRegistros = mssql_num_rows($consulta);
echo 'Esta tabela contém $numRegistros registros!\n<hr>\n';

if ($numRegistros!=0) {
while ($cadaLinha = mssql_fetch_array($consulta)) {
echo '$cadaLinha[$campo1] – $cadaLinha[$campo2]\n<br>\n';
}
}

?>