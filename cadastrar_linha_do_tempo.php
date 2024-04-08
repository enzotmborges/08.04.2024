<?php
require_once('conexao.php');

$txtNomeLinhaDoTempo = $_POST['txtNomeLinhaDoTempo'];
$txtDescricaoLinhaDoTempo = $_POST['txtDescricaoLinhaDoTempo'];

$str_sql_cadastrar_linha_do_tempo = "insert into `linha_do_tempos` (`nome`, `descricao`) values ('$txtNomeLinhaDoTempo', '$txtDescricaoLinhaDoTempo');";

try {
    $cadastrar_linha_do_tempo = mysqli_query($conexao, $str_sql_cadastrar_linha_do_tempo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idLinhaDoTempo'] = $ultimo_id;
    die('idLinhaDoTempo: ' . $_SESSION['idLinhaDoTempo']);
} catch (Exception) {
    die('Não foi possível cadastrar o(a) linha_do_tempo str sql: ' . $str_sql_cadastrar_linha_do_tempo);
}
?>