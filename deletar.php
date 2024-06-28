<?php
// Verifica se foi passado o parâmetro 'id' via GET
if (!empty($_GET['id'])) {
    // Inclui o arquivo de configuração com a conexão ao banco de dados
    include_once('conectar.php');

    // Captura o ID passado via GET
    $id = $_GET['id'];

    // Query para atualizar os dados das colunas desejadas para NULL
    $sqlUpdate = "UPDATE curriculo 
                  SET nomeArquivo = NULL, dataEnvio = NULL, caminho = NULL 
                  WHERE idcurriculo = ?";

    // Prepara a declaração SQL
    $stmt = $conn->prepare($sqlUpdate);

    // Executa a declaração com o ID do currículo como parâmetro
    if ($stmt->execute([$id])) {
        echo "Dados das colunas nomeArquivo, dataEnvio e caminho foram excluídos com sucesso.";
    } else {
        echo "Erro ao excluir dados das colunas nomeAluno, dataEnvio e caminho.";
    }
} else {
    echo "ID do currículo não foi especificado.";
}
?>
