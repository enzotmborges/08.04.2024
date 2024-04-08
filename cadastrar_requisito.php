<?php
require_once('conexao.php');

$txtNomeRequisito = $_POST['txtNomeRequisito'];
$txtDescricaoRequisito = $_POST['txtDescricaoRequisito'];

$str_sql_cadastrar_requisito = "insert into `requisitos` (`nome`, `descricao`) values ('$txtNomeRequisito', '$txtDescricaoRequisito');";

try {
    $cadastrar_requisito = mysqli_query($conexao, $str_sql_cadastrar_requisito);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRequisito'] = $ultimo_id;
    die('idRequisito: ' . $_SESSION['idRequisito']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) requisito str sql: ' . $str_sql_cadastrar_requisito);
}
?>