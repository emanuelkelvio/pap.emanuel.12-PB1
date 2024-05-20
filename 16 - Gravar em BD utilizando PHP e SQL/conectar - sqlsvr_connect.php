<?php
// Dados do banco
$dbhost = 'localhost'; #Nome do host
$db = 'bd1'; #Nome do banco de dados
$user = 'root@localhost'; #Nome do usuário
$password = ''; #Senha do usuário

// Dados da tabela
$tabela = 'livrovisitas'; #Nome da tabela
$campo1 = 'id_mensagem';  #Nome do campo da tabela
$campo2 = 'nome';  #Nome de outro campo da tabela
$campo3 = 'mensagem';  #Nome de outro campo da tabela
$campo4 = 'data';  #Nome de outro campo da tabela
$campo5 = 'hora';  #Nome de outro campo da tabela

$conninfo = array('Database' => $db, 'UID' => $user, 'PWD' => $password);
$conn = sqlsrv_connect($dbhost, $conninfo);

$instrucaoSQL = 'SELECT $campo1, $campo2 FROM $tabela ORDER BY $campo1';

$params = array();
$options =array('Scrollable' => SQLSRV_CURSOR_KEYSET);
$consulta = sqlsrv_query($conn, $instrucaoSQL, $params, $options);
$numRegistros = sqlsrv_num_rows($consulta);

echo 'Esta tabela contém $numRegistros registros!\n<hr>\n';

if ($numRegistros!=0) {
while ($cadaLinha = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC)) {
echo '$cadaLinha[$campo1] – $cadaLinha[$campo2]\n<br>\n';
}
}
?>