<?php
require_once('conexao.php');

$txtNomeLDT = $_POST['txtNomeLDT'];
$txtDescricaoLDT = $_POST['txtDescricaoLDT'];

$str_sql_cadastrar_ldt = "insert into `ldts` (`nome`, `descricao`) values ('$txtNomeLDT', '$txtDescricaoLDT');";

try {
    $cadastrar_ldt = mysql_query($conexao, $str_sql_cadastrar_ldt);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idLDT'] = $ultimo_id;
    die('idLDT: ' . $_SESSION['idLDT']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) ldt str sql: ' . $str_sql_cadastrar_ldt);
}
?>