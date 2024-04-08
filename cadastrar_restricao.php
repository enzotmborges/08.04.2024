<?php
require_once('conexao.php');

$txtNomeRestricao = $_POST['txtNomeRestricao'];
$txtDescricaoRestricao = $_POST['txtDescricaoRestricao'];

$str_sql_cadastrar_restricao = "insert into `restricaos` (`nome`, `descricao`) values ('$txtNomeRestricao', '$txtDescricaoRestricao');";

try {
    $cadastrar_restricao = mysqli_query($conexao, $str_sql_cadastrar_restricao);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRestricao'] = $ultimo_id;
    die('idRestricao: ' . $_SESSION['idRestricao']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) restricao str sql: ' . $str_sql_cadastrar_restricao);
}
?>