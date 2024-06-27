<?php
// Verifica se o parâmetro id foi passado via GET
if (!empty($_GET['id'])) {
    // Conecta ao banco de dados (substitua pelas suas credenciais de conexão)
    require('conectar.php');

    // Obtém o id a ser excluído
    $id = $_GET['id'];

    // Query SQL para excluir o registro com base no id
    $sqlDelete = "DELETE FROM gestor.cadastroaluno WHERE id = $id";

    // Executa a query de exclusão
    if ($conn->query($sqlDelete) === TRUE) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro ao excluir registro: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
} else {
    echo "ID não especificado para exclusão.";
}
?>
