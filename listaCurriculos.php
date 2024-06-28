<!doctype html>
<html lang="pt-br">
<head>
  <title>Todos Currículos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Seus Currículos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mandar Currículo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Gestor.html">Gestão Currículos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1 class="mb-4">Currículos</h1>
    <div class="row">
        <?php
        include('conectar.php');

        // Verifica se foi enviado um ID via GET
        $filter_id = isset($_GET['id']) ? (int)$_GET['id'] : null;

        $sql = "SELECT ca.idAluno, ca.nomeAluno, ca.dtNasc, ca.email, ca.telefone, c.nomeCursos, cu.nomeArquivo, cu.dataEnvio, cu.caminho 
                FROM cadastroaluno ca
                INNER JOIN curriculo cu ON ca.idAluno = cu.aluno
                INNER JOIN cursos c ON cu.curso = c.idCursos";

        // Se houver um ID enviado, adiciona a cláusula WHERE para filtrar pelo ID do currículo
        if ($filter_id !== null) {
            $sql .= " WHERE cu.idcurriculo = $filter_id";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4">';
                echo '<div class="card mb-4">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($row["nomeAluno"]) . '</h5>';
                echo '<p class="card-text">Data de Nascimento: ' . date('d/m/Y', strtotime($row["dtNasc"])) . '</p>';
                echo '<p class="card-text">Email: ' . htmlspecialchars($row["email"]) . '</p>';
                echo '<p class="card-text">Telefone: ' . htmlspecialchars($row["telefone"]) . '</p>';
                echo '<p class="card-text">Curso: ' . htmlspecialchars($row["nomeCursos"]) . '</p>';
                echo '<p class="card-text">Nome do Arquivo: ' . htmlspecialchars($row["nomeArquivo"]) . '</p>';
                echo '<a href="' . htmlspecialchars($row["caminho"]) . '" class="btn btn-primary" target="_blank">Visualizar Currículo</a>';
                // Botão de deletar com link para chamar o script de exclusão
                echo '<a href="excluir.php?id=' . $row["idcurriculo"] . '" class="btn btn-danger float-right ml-2">Deletar Currículo</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }    
        } else {
            echo '<div class="col-md-12">';
            echo '<div class="alert alert-info" role="alert">';
            echo 'Não foram encontrados currículos com o ID especificado.';
            echo '</div>';
            echo '</div>';
        }

        $conn->close();
        ?>
    </div>
</div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
