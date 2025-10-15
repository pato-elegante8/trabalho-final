<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <STYLE>
    body {
      background-color: #155c98;
      margin: 0;
      font-family: "Times New Roman", serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      position: relative;
    }

    button {
          width: 250px;
          height: 75px;
        }

    
    .login-btn {
      position: absolute;
      top: 800px;
      right: 10px;  
      font-size: 30px;
      padding: 15px 30px;
      border-radius: 8px;
      cursor: pointer;
    }




   .caixa {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center; 
}

    .custom-btn {
      font-size: 20px;
      padding: 20px 80px;
      border-radius: 10px;
      cursor: pointer;
    }

    .footer {
      background-color: #0d2a5b;
      width: 100%;
      height: 60px;
    }
  </style>
</head>
<body>

  <img src="https://www3.maringa.pr.gov.br/construtor/imagens/120623091046_juventude_jpg.jpg" alt="">




  <a href="login_adm.php" class="login-btn btn btn-success">LOGIN</a>

  
  
  <div class="caixa">
    <a href="pagina_login.php">
    <button type="button" class="btn btn-success">CONVERSE CONOSCO</button>  
    </a>
  </div>

  <div class="footer"></div>

</body>
</html>
