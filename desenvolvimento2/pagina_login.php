<?php
// --- PROCESSAMENTO DO FORMULÁRIO ---
$host = "localhost";
$user = "root";
$pass = "";
$db   = "conecta";

// Conexão com MySQL
$con = new mysqli($host, $user, $pass, $db);
if ($con->connect_error) {
    die("Erro de conexão: " . $con->connect_error);
}

// Processa formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome   = $con->real_escape_string($_POST['nome']);
    $cep    = $con->real_escape_string($_POST['CEP']);
    $genero = $con->real_escape_string($_POST['genero']);
    $idade  = (int)$_POST['IDADE'];

    $sql = "INSERT INTO usuarios_novos (nome, CEP, genero, idade) 
            VALUES ('$nome', '$cep', '$genero', $idade)";

    if ($con->query($sql) === TRUE) {
        // Se a inserção deu certo, redireciona para formulario.php
        header("Location: formulario.php");
        exit();
    } else {
        $mensagem = "Erro ao cadastrar: " . $con->error;
    }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
body {
  margin: 0;
  padding: 0;
  background-image: url('jovens-colegas-estudando-de-notebook-e-laptop-durante-sessao-de-estudo.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  font-family: Arial, sans-serif;
}

body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 80, 0.45);
        backdrop-filter: brightness(0.9);
        z-index: -1;
      }


.bottom-bar { background-color: #0d2a5b; height: 60px; width: 100%; position: fixed; bottom: 0; left: 0; }

.card { border: none; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); background-color: rgba(255, 255, 255, 0.95); }
.card-header { background-color: #0d2a5b; color: white; font-size: 1.2rem; border-top-left-radius: 15px !important; border-top-right-radius: 15px !important; }
.container { margin-top: 80px; margin-bottom: 80px; }

.btn-success { background: linear-gradient(135deg, #00b894, #0984e3); border: none; border-radius: 50px; font-size: 18px; transition: all 0.3s ease; }
.btn-success:hover { transform: scale(1.05); background: linear-gradient(135deg, #00cec9, #74b9ff); }
.mensagem { text-align: center; font-weight: bold; color: #ffc107; margin-bottom: 15px; }
</style>
</head>

<body>

<br>
<br>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="card mb-4">
        <div class="card-header text-center py-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#ffc107" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg>
          &nbsp;<b>Bem-vindo Estudante</b>
        </div>

        
        <div class="card-body">
          <?php if(isset($mensagem)) { echo "<div class='mensagem'>{$mensagem}</div>"; } ?>
          
          <form action="" method="POST">
            <div class="mb-3">
              <label class="form-label"><b>NOME</b></label>
              <input class="form-control" type="text" name="nome" required>
            </div>

            <div class="mb-3">
              <label class="form-label"><b>CEP</b></label>
              <input class="form-control" type="text" name="CEP" required>
            </div>

            <div class="mb-3">
              <label for="genero" class="form-label"><b>GÊNERO</b></label>
              <select class="form-select" id="genero" name="genero" required>
                <option value="" selected disabled>Escolha uma opção</option>
                <option value="masculino">MASCULINO</option>
                <option value="feminino">FEMININO</option>
                <option value="outro">OUTRO</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label"><b>IDADE</b></label>
              <input class="form-control" type="number" name="IDADE" required>
            </div>

            <div class="d-grid">
              <input type="submit" class="btn btn-success" value="CADASTRAR-SE">
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>



</body>
</html>
