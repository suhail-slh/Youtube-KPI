<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      window.onload = function()
      {
          google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var json_data = <?php echo json_encode($dataPoints2,JSON_NUMERIC_CHECK);?>;
        
        var data = new google.visualization.DataTable();
        data.addColumn('number', 'x');
        data.addColumn('number', 'y');

        json_data.forEach(function (row) {
            data.addRow([
            row.x,
            row.y
            ]);
        });

        var options = {
          title: 'Like:Dislike Ratio per upload',
          hAxis: {title: 'Uploads',  titleTextStyle: {color: '#333'}},
          vAxis: {title: 'Like:Dislike Ratio',minValue: 0},
          animation: {
            startup: true,
            duration: 2000,
            easing: 'out',
          }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chartContainer1'));
        chart.draw(data, options);
      }
      }
</script>