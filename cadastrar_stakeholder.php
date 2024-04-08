<?php
require_once('conexao.php');

$txtNomeStakeHolder = $_POST['txtNomeStakeHolder'];
$txtDescricaoStakeHolder = $_POST['txtDescricaoStakeHolder'];

$str_sql_cadastrar_stakeholder = "insert into `stakeholders` (`nome`, `descricao`) values ('$txtNomeStakeHolder', '$txtDescricaoStakeHolder');";

try {
    $cadastrar_stakeholder = mysqli_query($conexao, $str_sql_cadastrar_stakeholder);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idStakeHolder'] = $ultimo_id;
    die('idStakeHolder: ' . $_SESSION['idStakeHolder']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) stakeholder str sql: ' . $str_sql_cadastrar_stakeholder);
}
?>