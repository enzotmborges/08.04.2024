<?php
require_once('conexao.php');

$txtNomeOS = $_POST['txtNomeOS'];
$txtDescricaoOS = $_POST['txtDescricaoOS'];

$str_sql_cadastrar_os = "insert into `oss` (`nome`, `descricao`) values ('$txtNomeOS', '$txtDescricaoOS');";

try {
    $cadastrar_os = mysql_query($conexao, $str_sql_cadastrar_os);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idOS'] = $ultimo_id;
    die('idOS: ' . $_SESSION['idOS']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) os str sql: ' . $str_sql_cadastrar_os);
}
?>