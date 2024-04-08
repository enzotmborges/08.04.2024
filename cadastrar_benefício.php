<?php
require_once('conexao.php');

$txtNomeBeneficio = $_POST['txtNomeBeneficio'];
$txtDescricaoBeneficio = $_POST['txtDescricaoBeneficio'];

$str_sql_cadastrar_beneficio = "insert into `Beneficio` (`nome`, `descricao`) values ('$txtNomeBeneficio', '$txtDescricaoBeneficio');";

try {
    $cadastrar_beneficio = mysqli_query($conexao, $str_sql_cadastrar_beneficio);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idBeneficio'] = $ultimo_id;
    die('idBeneficio: ' . $_SESSION['idBeneficio']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) beneficio str sql: ' . $str_sql_cadastrar_beneficio);
}
?>