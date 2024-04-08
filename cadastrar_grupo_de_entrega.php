<?php
require_once('conexao.php');

$txtNomeGrupoDeEntrega = $_POST['txtNomeGrupoDeEntrega'];
$txtDescricaoGrupoDeEntrega = $_POST['txtDescricaoGrupoDeEntrega'];

$str_sql_cadastrar_grupo_de_entrega = "insert into `grupo_de_entregas` (`nome`, `descricao`) values ('$txtNomeGrupoDeEntrega', '$txtDescricaoGrupoDeEntrega');";

try {
    $cadastrar_grupo_de_entrega = mysqli_query($conexao, $str_sql_cadastrar_grupo_de_entrega);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idGrupoDeEntrega'] = $ultimo_id;
    die('idGrupoDeEntrega: ' . $_SESSION['idGrupoDeEntrega']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) grupo_de_entrega str sql: ' . $str_sql_cadastrar_grupo_de_entrega);
}
?>