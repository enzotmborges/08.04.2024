<?php
require_once('conexao.php');

$txtNomeEquipe = $_POST['txtNomeEquipe'];
$txtDescricaoEquipe = $_POST['txtDescricaoEquipe'];

$str_sql_cadastrar_equipe = "insert into `equipes` (`nome`, `descricao`) values ('$txtNomeEquipe', '$txtDescricaoEquipe');";

try {
    $cadastrar_equipe = mysqli_query($conexao, $str_sql_cadastrar_equipe);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idEquipe'] = $ultimo_id;
    die('idEquipe: ' . $_SESSION['idEquipe']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) equipe str sql: ' . $str_sql_cadastrar_equipe);
}
?>