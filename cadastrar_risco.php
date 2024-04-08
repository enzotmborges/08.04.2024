<?php
require_once('conexao.php');

$txtNomeRisco = $_POST['txtNomeRisco'];
$txtDescricaoRisco = $_POST['txtDescricaoRisco'];

$str_sql_cadastrar_risco = "insert into `riscos` (`nome`, `descricao`) values ('$txtNomeRisco', '$txtDescricaoRisco');";

try {
    $cadastrar_risco = mysql_query($conexao, $str_sql_cadastrar_risco);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRisco'] = $ultimo_id;
    die('idRisco: ' . $_SESSION['idRisco']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) risco str sql: ' . $str_sql_cadastrar_risco);
}
?>