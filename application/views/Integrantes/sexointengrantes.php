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

  <script src="<?=base_url() ?>code/highcharts.js"></script>
<script src="<?=base_url() ?>code/modules/data.js"></script>
<script src="<?=base_url() ?>code/modules/exporting.js"></script>
<script src="<?=base_url() ?>code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
   Gráfica el porcentaje de número de genero por integrantes
  </p>
  <table id="datatable">
        <thead class="table table-striped table-sm table-success">
            <tr>
                <th>Sexo</th>
                <th>Total Integrantes</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->Sexo?></th>
                    <td><?=$key->total?></td>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
</figure>    
    <script type="text/javascript">


Highcharts.chart('container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Integrantes por sexo',
    align: 'left'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
    point: {
      valueSuffix: '%'
    }
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: 'Sexo',
    colorByPoint: true,
    data: [
      <?php foreach ($variable as $key):?>
      {
        name: '<?php echo $key->Sexo;?>',
        y:  <?php echo $key->total;?>,
      },
      <?php endforeach;?>
      ]
  }]
});

		</script>
	</body>
</html>