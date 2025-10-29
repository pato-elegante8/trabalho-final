<?php
    include 'conecta.php';
    $sql = "SELECT 
            genero, 
                COUNT(*) as total 
            FROM usuarios_novos 
            GROUP BY genero 
            ORDER BY total DESC";
    
    $resultado = $conn->query($sql);

    $dados_grafico = [['usuarios_novos', 'Total de genero']];
    if ($resultado->num_rows > 0) {
        while($linha = $resultado->fetch_assoc()) {
            $dados_grafico[] = [$linha['genero'], (int)$linha['total']];
        }
    }
    $conn->close();
    $dados_json = json_encode($dados_grafico);
?>
<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable}
            function drawChart() {
            var data = google.visualization.arrayToDataTable(<?php echo $dados_json; ?>);

            var options = {
                width: 400,
                height: 250,
            };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 400px; height: 500px;"></div>
  </body>
</html>