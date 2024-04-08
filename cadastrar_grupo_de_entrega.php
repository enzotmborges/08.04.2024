<?php
require_once('conexao.php');

$txtNomeGDE = $_POST['txtNomeGDE'];
$txtDescricaoGDE = $_POST['txtDescricaoGDE'];

$str_sql_cadastrar_gde = "insert into `gdes` (`nome`, `descricao`) values ('$txtNomeGDE', '$txtDescricaoGDE');";

try {
    $cadastrar_gde = mysql_query($conexao, $str_sql_cadastrar_gde);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idGDE'] = $ultimo_id;
    die('idGDE: ' . $_SESSION['idGDE']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) gde str sql: ' . $str_sql_cadastrar_gde);
}
?>