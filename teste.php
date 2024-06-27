<?php

require('conectar.php');

// Processo para deletar um item da lista
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    
    // Preparando a query de deletar
    $sql_delete = "DELETE FROM curriculo WHERE id = $id";

    if ($conn->query($sql_delete) === TRUE) {
        echo "Item deletado com sucesso.";
        // Após deletar, redireciona para evitar reenvios indesejados ao atualizar a página
        header("Location: {$_SERVER['PHP_SELF']}");
        exit(); // Certifica-se de que o script não continua após o redirecionamento
    } else {
        echo "Erro ao deletar item: " . $conn->error;
    }
}

// Processo para inserir um novo item na lista
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];

    // Preparando a query de inserção
    $sql_insert = "INSERT INTO curriculo (nome) VALUES ('$nome')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "Novo item adicionado com sucesso.";
        // Após inserir, redireciona para evitar reenvios indesejados ao atualizar a página
        header("Location: {$_SERVER['PHP_SELF']}");
        exit(); // Certifica-se de que o script não continua após o redirecionamento
    } else {
        echo "Erro ao adicionar novo item: " . $conn->error;
    }
}

// Formulário para inserir novos nomes na lista
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Nomes à Lista</title>
</head>
<body>
    <h2>Adicionar Novo Nome</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Adicionar</button>
    </form>

    <hr>

<?php
// Query para selecionar todos os itens da lista
$sql_select = "SELECT id, nome FROM lista_itens";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    echo "<h2>Lista de Nomes</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['nome']} <a href=\"?delete_id={$row['id']}\" onclick=\"return confirm('Tem certeza que deseja deletar este item?');\">Deletar</a></li>";
    }
    echo "</ul>";
} else {
    echo "<p>Não há itens na lista.</p>";
}

$conn->close();
?>

</body>
</html>
