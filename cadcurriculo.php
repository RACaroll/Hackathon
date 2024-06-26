<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro curriculo</title>
<link rel="stylesheet" href="style/folha.css">
</head>
<body>
    
<h2>Cadastro de Curriculo</h2>

<?php
    include('backsalvar.php');
?>

<form id="formsalvar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <label for="nomeArquivo">Nome do arquivo:</label>
    <input type="text" id="nomeArquivo" name="nomeArquivo" required><br><br>
    
    <label for="curriculo">Curriculo:</label>
    <input type="file" id="curriculo" name="curriculo" accept="image/pdf" required>
    <img id="previewLogo" src="#" alt="Preview do Logo" style="display: none; max-width: 200px;"><br><br>
    
    <input type="submit" value="Salvar">
</form>
</body>
</html>