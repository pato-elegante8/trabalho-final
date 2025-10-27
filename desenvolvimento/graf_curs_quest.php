<?php
    include 'conecta.php';

    $conn->set_charset("utf8");

    $sql = "SELECT 
                cursos, 
                COUNT(*) as total 
            FROM quest 
            GROUP BY cursos 
            ORDER BY total DESC";
    
    $resultado = $conn->query($sql);

    $dados_grafico = [['Curso', 'Total de cursos']];
    if ($resultado->num_rows > 0) {
        while($linha = $resultado->fetch_assoc()) {
            $dados_grafico[] = [$linha['cursos'], (int)$linha['total']];
        }
    }
    $conn->close();
    $dados_json = json_encode($dados_grafico, JSON_UNESCAPED_UNICODE);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gráfico de Cursos</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        /* Centraliza o gráfico na tela */
        #grafico {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 35vh; /* Altura total da tela */
        }
    </style>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo $dados_json; ?>);

        var options = {
          title: 'Distribuição dos Cursos',
          width: 350,
          height: 350,
          legend: { position: 'none' },
          hAxis: {
            title: 'Total de Cursos',
            minValue: 0
          },
          vAxis: {
            title: 'Cursos'
          },
          bars: 'horizontal'
        };

        var chart = new google.visualization.BarChart(document.getElementById('grafico'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
    <div id="grafico"></div>
</body>
</html>
