<!doctype html>
<html lang="pt-br">
<head>
  <title>Administrar Currículos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <style>
    .inactive {
      background-color: #d3d3d3;
    }
  </style>
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
            <a class="nav-link active" aria-current="page" href="#">Currículos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Mandar Currículo</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1 class="mb-4">Currículos</h1>

    <form class="mb-4" method="GET" action="">
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" name="search" placeholder="Pesquisar por nome">
        </div>
        <div class="col">
          <select class="form-control" name="curso">
            <option value="">Todos os Cursos</option>
            <?php
              include('conectar.php');
              // Pegar todos os cursos
              $cursoQuery = "SELECT idCursos, nomeCursos FROM cursos ORDER BY nomeCursos ASC";
              $cursoResult = $conn->query($cursoQuery);
              while ($cursoRow = $cursoResult->fetch_assoc()) {
                echo '<option value="' . htmlspecialchars($cursoRow['idCursos']) . '">' . htmlspecialchars($cursoRow['nomeCursos']) . '</option>';
              }
            ?>
          </select>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-primary">Filtrar</button>
        </div>
      </div>
    </form>

    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
        Lista de Currículos
      </a>

      <?php
      include('conectar.php');

      if ($conn->connect_error) {
          die("Conexão falhou: " . $conn->connect_error);
      }

      // Atualizar o status do currículo se a solicitação POST for feita
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          if (isset($_POST['id']) && isset($_POST['status'])) {
              $id = $conn->real_escape_string($_POST['id']);
              $status = $conn->real_escape_string($_POST['status']);

              $sqlUpdate = "UPDATE curriculo SET status = '$status' WHERE aluno = '$id'";
              if ($conn->query($sqlUpdate) === TRUE) {
                  echo '<div class="alert alert-success" role="alert">Status atualizado com sucesso!</div>';
              } else {
                  echo '<div class="alert alert-danger" role="alert">Erro ao atualizar status.</div>';
              }
          }
      }

      // Consultar currículos
      $sql = "SELECT cadastroaluno.idAluno, cadastroaluno.nomeAluno, cadastroaluno.dtNasc, cursos.nomeCursos, curriculo.status 
              FROM cadastroaluno 
              JOIN curriculo ON cadastroaluno.idAluno = curriculo.aluno
              JOIN cursos ON curriculo.curso = cursos.idCursos
              WHERE 1=1";

      if (isset($_GET['search']) && !empty($_GET['search'])) {
          $search = $conn->real_escape_string($_GET['search']);
          $sql .= " AND cadastroaluno.nomeAluno LIKE '%$search%'";
      }

      if (isset($_GET['curso']) && !empty($_GET['curso'])) {
          $curso = $conn->real_escape_string($_GET['curso']);
          $sql .= " AND curriculo.curso = '$curso'";
      }

      $sql .= " ORDER BY cadastroaluno.nomeAluno ASC";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $rowClass = $row["status"] ? '' : ' inactive';
              echo '<div class="list-group-item list-group-item-action' . $rowClass . '">';
              echo '<div class="d-flex w-100 justify-content-between">';
              echo '<h5 class="mb-1">' . htmlspecialchars($row["nomeAluno"]) . '</h5>';
              echo '<small>Data de Nascimento: ' . date('d/m/Y', strtotime($row["dtNasc"])) . '</small>';
              echo '<small>Curso: ' . htmlspecialchars($row["nomeCursos"]) . '</small>';
              echo '</div>';
              // Adiciona o botão de toggle para o status
              echo '<form method="POST" action="" class="d-inline">';
              echo '<input type="hidden" name="id" value="' . $row["idAluno"] . '">';
              echo '<input type="hidden" name="status" value="' . ($row["status"] ? 0 : 1) . '">';
              echo '<button type="submit" class="btn btn-sm ' . ($row["status"] ? 'btn-success' : 'btn-secondary') . '">';
              echo $row["status"] ? 'Ativo' : 'Inativo';
              echo '</button>';
              echo '</form>';
              echo '</div>';
          }
      } else {
          echo '<p>Nenhum currículo encontrado.</p>';
      }

      $conn->close();
      ?>
    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
