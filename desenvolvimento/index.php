<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Site com Faixas e Fundo</title>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Times New Roman", serif;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        color: white;
        overflow: hidden;
      }

            body {
        background-image: url('universitarias-estudando-juntas.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
      }

      /* Filtro azul escuro */
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
    
      /* Faixa superior */
      .top-bar {
        background-color: #0d2a5b;
        height: 60px;
        width: 100%;
      }

      /* Faixa inferior */
      .bottom-bar {
        background-color: #0d2a5b;
        height: 60px;
        width: 100%;
      }

      /* Botão central bonito */
      .caixa {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .custom-btn {
        font-size: 24px;
        padding: 20px 80px;
        border-radius: 50px;
        background: linear-gradient(135deg, #00b894, #0984e3);
        color: white;
        border: none;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
      }

      .custom-btn:hover {
        transform: scale(1.05);
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.4);
        background: linear-gradient(135deg, #00cec9, #74b9ff);
      }

      /* Botão de login canto inferior direito */
      .login-btn {
        position: fixed;
        bottom: 80px;
        right: 20px;
        font-size: 18px;
        padding: 12px 30px;
        border-radius: 30px;
        background: linear-gradient(135deg, #6c5ce7, #0984e3);
        border: none;
        color: white;
        font-weight: bold;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
        text-decoration: none;
      }

      .login-btn:hover {
        background: linear-gradient(135deg, #a29bfe, #74b9ff);
        transform: scale(1.08);
      }
    </style>
  </head>
  <body>

    <div class="top-bar"></div>

    <div class="caixa">
      <a href="pagina_login.php">
        <button type="button" class="custom-btn">CONVERSE CONOSCO</button>
      </a>
    </div>

    <a href="login_adm.php" class="login-btn">LOGIN</a>

    <div class="bottom-bar"></div>

  </body>
</html>
