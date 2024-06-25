<?php
require('conectar.php');
// Query SQL para selecionar todos os cursos
$sql = "SELECT idCurso, nomeCurso FROM cursos";

// Executa a consulta e obtém o resultado
$result = $conn->query($sql);

// Verifica se há resultados e exibe o select
if ($result->num_rows > 0) {
    echo '<select class="form-select" id="curso" name="curso" required>';
    echo '<option value="">Escolha um curso...</option>';
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["idCurso"] . '">' . $row["nomeCurso"] . '</option>';
    }
    echo '</select>';
} else {
    echo "Nenhum curso encontrado na base de dados.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
