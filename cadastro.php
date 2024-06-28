<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta name="description" content="Toastify is a pure JavaScript library that lets you create notifications toasts/messages.">
    <meta name="keywords" content="Javascript,Library,Toastify">
    <meta name="author" content="apvarun">
    <link rel="stylesheet" type="text/css" href="example/script.css">
    <link rel="stylesheet" type="text/css" href="src/toastify.css">
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        
</head>


<body>
<?php
    include('conectar.php');
    
 ?>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
            </path>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
            </path>
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
            </path>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
            </path>
        </symbol>
    </svg>



    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#sun-fill"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>




    <header data-bs-theme="dark">
        <div class="collapse text-bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4>About</h4>
                        <p class="text-body-secondary">Add some information about the album below, the author, or any
                            other background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4>Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Formulário</strong>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./cadastro.html" class="nav-link px-2 text-white">Cadastro</a></li>
                    <li><a href="./Enviodecurriculos.html" class="nav-link px-2 text-white">Envio de Currículos</a></li>
                    <li><a href="./curriculosenviados.html" class="nav-link px-2 text-white">Currículos enviados</a></li>
                </ul>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitEnviar'])) {
    // Inclui o arquivo de conexão com o banco de dados
    require('conectar.php');
        
    $nomeAluno = $_POST['nomeAluno'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $dtNasc = $_POST['dtNasc'];
    $curso = $_POST['curso'];
    $telefone = str_replace("-","",$telefone);
    $telefone=(filter_var($telefone,FILTER_SANITIZE_NUMBER_INT));

    
    
    // Prepara e executa a primeira consulta para inserir dados do aluno
    $sql = "INSERT INTO cadastroAluno (nomeAluno, telefone, email, dtNasc) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nomeAluno, $telefone, $email, $dtNasc);

    if ($stmt->execute()) {
        echo '<script type="text/javascript">toastr.success("Aluno cadastrado com sucesso")</script>';
        $idAluno = $conn->insert_id;
        $sql1 = "INSERT INTO curriculo (aluno, curso) VALUES (?, ?)";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param('ii', $idAluno, $curso);
        
        if ($stmt1->execute()) {
            echo '<script type="text/javascript">toastr.success("Curriculo cadastrado com sucesso")</script>';
        } else {
            echo '<script type="text/javascript">toastr.warning("Falha ao cadastrar o curriculo")</script>' . $conn->error;
        }
        

        // Fecha a segunda declaração
        $stmt1->close();
    } else {
        echo '<script type="text/javascript">toastr.success("Aluno cadastrado com sucesso")</script>' . $conn->error;
    }

    // Fecha a primeira declaração e a conexão
    $stmt->close();
    $conn->close();
}

    
?>
    <main class="container col-md">
        <h1>Formulário de Cadastro</h1>
        <form class="needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="row g-3">
                <div class="col-md-12">
                    <label for="nomeAluno" class="form-label">Nome:</label>
                    <input name="nomeAluno" type="text" class="form-control" id="nomeAluno" placeholder="Nome Sobrenome" pattern="[A-Za-a]{}" value="" required="">
                    <div class="invalid-feedback">
                        Verifique se o nome está correto.
                    </div>
                </div>

<!-- buscar no banco!-->
<div class="col-md-8">
                    <label for="curso" class="form-label">Curso:</label>
                    <select name="curso" class="form-select" id="curso" required="">
                        <option value="">Escolha...</option>
                  
                    <div class="invalid-feedback">
                        Por favor insira uma curso válido.
                <?php
        // Conexão com o banco de dados
        require('conectar.php');

        $nomeCursos=$_POST['nomeCursos'];

        // Consulta para buscar as montadoras
        $sql = "SELECT * FROM cursos";

        $result = $conn->query($sql);

        // Verificação se há montadoras cadastradas
        if ($result->num_rows > 0) {
            // Loop para exibir as montadoras como opções no select
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["idCursos"]. "'>" . $row["nomeCursos"]. "</option>";
            }
        } else {
            echo "<option value=''>Nenhum Curso cadastrado</option>";
        }

        // Fechamento da conexão com o banco de dados
        $conn->close();
        ?>
          </select>
             </div>
                <div class="col-md-4">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input name="telefone" type="text" class="form-control" id="telefone" placeholder="" required="">
                    <div class="invalid-feedback">
                        Por favor entre com um telefone válido.
                    </div>
                </div>


                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input name="email" type="email" class="form-control" id="email"placeholder="" required="">
                    <div class="invalid-feedback">
                        Por favor insira um E-mail válido.
                    </div>
                </div>



                <div class="col-md-4">
                    <label for="dtNasc" class="form-label">Data de Nascimento:</label>
                    <input name="dtNasc" type="date" class="form-control" id="dtNasc" placeholder="" required="">
                    <div class="invalid-feedback">
                        Por favor insira uma data compatível.
                    </div>
                </div>

            </div> <br> <button  type="submit" name="submitEnviar"  class="btn btn-primary">Salvar</button>
            <svg class="bi ms-1" width="20" height="50"><use xlink:href="#arrow-right-short"></use></svg>
            
        </form>
    </main>
    <footer class="container col-md">
        <br>
        <footer class="my-1 pt-1 text-body-secondary text-center text-small">
            <p class="mb-1"> </p>


            </ul>
          </footer>
     


        </div>


        <hr class="my-4">
    </footer>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


    






</body>
<script type="text/javascript" src="src/toastify.js"></script>
<script type="text/javascript" src="example/script.js"></script>

</html>

