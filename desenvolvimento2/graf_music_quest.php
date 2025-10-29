

<?php
    include 'conecta.php';
    $sql = "SELECT 
            musicas, 
                COUNT(*) as total 
            FROM quest 
            GROUP BY musicas 
            ORDER BY total DESC";
    
    $resultado = $conn->query($sql);

    $dados_grafico = [['quest', 'Total de musicas']];
    if ($resultado->num_rows > 0) {
        while($linha = $resultado->fetch_assoc()) {
            $dados_grafico[] = [$linha['musicas'], (int)$linha['total']];
        }
    }
    $conn->close();
    $dados_json = json_encode($dados_grafico);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(<?php echo $dados_json; ?>);

            var options = {
                width: 350,
                height: 230,
            };

            var chart = new google.visualization.PieChart(document.getElementById('grafico_pizza'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="grafico_pizza" style="width: 450%; max-width: 350px; height: 225px; margin: auto;"></div>
</body>
</html>