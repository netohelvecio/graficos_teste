<?php

  include('./php/conexao.php');

  $arr_frutas = [];
  $arr_quantidade = [];
  $cor = array("#00BFFF", "#00FA9A", "#DAA520", "#FF00FF", "#0000FF");
  $i = 0;

  $sql = 'select * from fruta';
  $resultado = mysqli_query($conn, $sql);

  while($dado = $resultado -> fetch_array()){    
    $qtd= $dado['quantidade_fruta'];
    $nome= $dado['nome_fruta'];
    $arr_frutas[$i] = $nome;
    $arr_quantidade[$i] = $qtd;
    $i = $i + 1;
  }

?>

<html>
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Fruta", "Quantidade", { role: "style" } ],
        <?php
            $k = $i;
            for ($i=0; $i < $k; $i++) {
            ?>               
              ['<?php echo $arr_frutas[$i] ?>', <?php echo $arr_quantidade[$i] ?>, '<?php echo $cor[$i] ?>'],
          <?php } ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Frutas",
        width: 600,
        height: 400,
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

  <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
</html>