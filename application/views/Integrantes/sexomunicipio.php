<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">
.highcharts-figure,
.highcharts-data-table table {
    min-width: 320px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

input[type="number"] {
    min-width: 50px;
}
</style>
	</head>
	<body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Gráfica donde muestra el número total de número de integrantes por el sexo y el Municipio
  </p>
  <table id="datatable">
        <thead class="table table-striped table-sm table-success">
            <tr>
                <th class="amarillo">Municipio</th>
                <th class="amarillo" >Hombres</th>
                <th class="amarillo">Mujeres</th>
  
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->Municipio?></th>
                    <td><?=$key->hombres?></td>
                    <td><?=$key->mujeres?></td>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
</figure>
    <script type="text/javascript">

    Highcharts.chart('container', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Grafica donde muestra el número total de numero de integrantes por el sexo y el Municipio'
      },
      subtitle: {
        text: 'Centro de trabajo 2023'
      },
      xAxis: {
        categories: [
          <?php foreach ($variable as $key): ?>
            '<?php echo $key->Municipio;?>',
          <?php endforeach;?>
        ],
        crosshair: true
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Rainfall (mm)'
        }
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
      },
      plotOptions: {
        column: {
          pointPadding: 0.2,
          borderWidth: 0
        }
      },
      series: [
        <?php foreach ($variable as $key): ?>{
            name: '<?php echo $key->Municipio;?>',
            data:  [<?php echo $key->hombres;?>, <?php echo $key->mujeres;?>],
          },
          <?php endforeach;?>
      ]
    });


		</script>
	</body>
</html>