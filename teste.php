<?php 

include_once('conexao.php');

try {
    $sql = 'select 1';
    $stmt = $pdo->query($sql);
    echo "Conexão e consulta bem-sucedidas";
}
catch (PDOException $e) {
    echo "Erro ao executar consulta: " . $e->getMessage();
}

?>