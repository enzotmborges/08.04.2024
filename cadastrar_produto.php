<?php
require_once('conexao.php');

$txtNomeProduto = $_POST['txtNomeProduto'];
$txtDescricaoProduto = $_POST['txtDescricaoProduto'];

$str_sql_cadastrar_produto = "insert into `produtos` (`nome`, `descricao`) values ('$txtNomeProduto', '$txtDescricaoProduto');";

try {
    $cadastrar_produto = mysqli_query($conexao, $str_sql_cadastrar_produto);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idProduto'] = $ultimo_id;
    die('idProduto: ' . $_SESSION['idProduto']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) produto str sql: ' . $str_sql_cadastrar_produto);
}
?>