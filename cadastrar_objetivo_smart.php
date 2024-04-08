<?php
require_once('conexao.php');

$txtNomeObjetivoSmart = $_POST['txtNomeObjetivoSmart'];
$txtDescricaoObjetivoSmart = $_POST['txtDescricaoObjetivoSmart'];

$str_sql_cadastrar_objetivo_smart = "insert into `objetivo_smarts` (`nome`, `descricao`) values ('$txtNomeObjetivoSmart', '$txtDescricaoObjetivoSmart');";

try {
    $cadastrar_objetivo_smart = mysqli_query($conexao, $str_sql_cadastrar_objetivo_smart);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idObjetivoSmart'] = $ultimo_id;
    die('idObjetivoSmart: ' . $_SESSION['idObjetivoSmart']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) objetivo_smart str sql: ' . $str_sql_cadastrar_objetivo_smart);
}
?>