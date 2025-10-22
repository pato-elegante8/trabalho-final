<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', Arial, sans-serif;
      }

      html, body {
        height: 100%;
      }

      body {
        background-image: url('amigos-desfrutando-de-uma-discussao-animada-em-um-espaco-bem-decorado.jpg');
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
        z-index: 0;
      }

      .container {
        position: absolute;
        top: 50%;
        left: 575px;
        transform: translateY(-50%);
        z-index: 1;
      }

      .formulario {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        padding: 20px 25px;
        width: 340px;
      }

      .formulario h2 {
        text-align: center;
        color: #1f2937;
        margin-bottom: 15px;
        font-size: 20px;
      }

      .pergunta {
        margin-bottom: 10px;
      }

      .pergunta label {
        font-weight: 600;
        color: #374151;
        font-size: 14px;
        display: block;
        margin-bottom: 4px;
      }

      .pergunta input[type="text"] {
        width: 100%;
        padding: 6px;
        border: none;
        border-bottom: 2px solid #9ca3af;
        background: transparent;
        outline: none;
        font-size: 14px;
        transition: border-color 0.2s;
      }

      .pergunta input[type="text"]:focus {
        border-color: #2563eb;
      }

      .btn-enviar {
        display: block;
        width: 100%;
        background-color: #2563eb;
        border: none;
        color: white;
        padding: 8px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 8px;
        transition: background 0.3s;
      }

      .btn-enviar:hover {
        background-color: #1e40af;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <form class="formulario" onsubmit="event.preventDefault();
         <h2>Questionário</h2>


        <div class="pergunta">
          <label>1. Você pratica algum esporte? Se sim, qual?</label>
                    <div class="mb-3">
                        <select class="form-select" id="esportes" name="esportes" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Basquete">Basquete</option>
                            <option value="Futebol">Futebol</option>
                            <option value="Vôlei">Vôlei</option>
                            <option value="Tênis">Tênis</option>
                            <option value="Natação">Natação</option>
                            <option value="Outro">Outro esporte que não esteja aqui.</option>
                        </select>
                    </div>
        <div class="pergunta">
          <label>2. Que tipo de música você mais gosta?</label>
          <select class="form-select" id="musicas" name="musicas" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Música Clássica">Música Clássica</option>
                            <option value="Rock">Rock</option>
                            <option value="Pop">Pop</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Hip-Hop/Rap">Hip-Hop/Rap</option>
                            <option value="Música Eletrônica">Música Eletrônica</option>
                            <option value="Reggae">Reggae</option>
                            <option value="Outro">Outro tipo de música que não esteja aqui.</option>
                        </select>

        <div class="pergunta">
          <label>3. Você já participou de algum curso extracurricular? Qual?</label>
           <select class="form-select" id="cursos" name="cursos" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Bacharelados">Bacharelados</option>
                            <option value="Licenciaturas">Licenciaturas</option>
                            <option value="Tecnólogos">Tecnólogos</option>
                            <option value="Outro">Outro tipo de curso que não esteja aqui.</option>
                        </select>
                    </div>

        <div class="pergunta">
          <label>4. Já assistiu a alguma palestra interessante recentemente? Sobre o quê?</label>
           <select class="form-select" id="palestras" name="palestras" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Transformação Digital e Inovação.">Transformação Digital e Inovação.</option>
                            <option value="Novas Tecnologias e a IA.">Novas Tecnologias e a IA.</option>
                            <option value="Gestão de Conflitos.">Gestão de Conflitos.</option>
                            <option value="Sustentabilidade e Responsabilidade Social.">Sustentabilidade e Responsabilidade Social.</option>
                            <option value="Novas Profissões.">Novas Profissões.</option>
                            <option value="Inteligência Emocional.">Inteligência Emocional.</option>
                            <option value="Liderança Humanizada.">Liderança Humanizada.</option>
                            <option value="Outro">Outro tipo de palestra que não esteja aqui.</option>
                        </select>
                    </div>

        <div class="pergunta">
          <label>5. Você já participou de algum workshop? De qual área?</label>
           <select class="form-select" id="workshops" name="workshops" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Presencial">Presencial</option>
                            <option value="Online">Online</option>
                            <option value="Híbrido">Híbrido</option>
                            <option value="Outro">Outro tipo de workshop que não esteja aqui</option>
                        </select>
                    </div>

        <div class="pergunta">
          <label>6. Você tem interesse em participar de atividades de teatro?</label>
         <select class="form-select" id="teatro" name="teatro" required>
                            <option value="" selected disabled>Faça a sua escolha</option>
                            <option value="Teatro Musical">Teatro Musical</option>
                            <option value="Teatro de Vanguarda">Teatro de Vanguarda</option>
                            <option value="Teatro Monólogo">Teatro Monólogo</option>
                            <option value="Teatro de Rua">Teatro de Rua</option>
                            <option value="Teatro de Fantoches/Marionetes">Teatro de Fantoches/Marionetes</option>
                            <option value="Teatro de Sombras">Teatro de Sombras</option>
                            <option value="Outro">Outro tipo de teatro que não esteja aqui</option>
                        </select>
                    </div>
        </div>
                <div>
                    <button type="submit" class="btn btn-success">Enviar</button>
    
                </div>
               </a>
            </div>
      </form>
    </div>
  </body>
</html>
