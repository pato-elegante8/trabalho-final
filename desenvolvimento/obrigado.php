<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Fundo da página */
    body {
      margin: 0;
      padding: 0;
      background-image: url('3534908.jpg'); /* Mesma imagem de fundo */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      font-family: Arial, sans-serif;
    }

    /* Barra superior */
    .top-bar {
      background-color: #3A506B;
      height: 60px;
      width: 100%;
    }

    /* Barra inferior */
    .bottom-bar {
      background-color: #3A506B;
      height: 60px;
      width: 100%;
      position: fixed;
      bottom: 0;
      left: 0;
    }

    /* Container central */
    .content {
      text-align: center;
      color: #0d2a5b;
      background-color: rgba(255, 255, 255, 0.92);
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      max-width: 500px;
      margin: 100px auto;
      padding: 40px 20px;
    }

    /* Título */
    .content h1 {
      font-weight: bold;
      margin-bottom: 20px;
      color: #0d2a5b;
    }

    /* Botão central */
    .btn-return {
      background-color: #0d2a5b;
      color: #ffc107;
      border: none;
      font-weight: bold;
      padding: 12px 24px;
      border-radius: 10px;
      transition: 0.3s;
    }

    .btn-return:hover {
      background-color: #173d7b;
      color: #fff;
    }
  </style>
</head>

<body>

  <!-- Faixa superior -->
  <div class="top-bar"></div>

  <!-- Mensagem central -->
  <div class="content">
    <h1>Obrigado pelo seu cadastro!</h1>
    <p>Seus dados foram enviados com sucesso.</p>
    <a href="index.php" class="btn btn-return mt-3">Retornar para o início</a>
  </div>

  <!-- Faixa inferior -->
  <div class="bottom-bar"></div>

</body>
</html>
