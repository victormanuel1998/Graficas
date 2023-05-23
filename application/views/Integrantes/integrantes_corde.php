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
    max-width: 660px;
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

		</style>
	</head>
	<body>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Gráfica donde muestra el número de total integrantes por la corde 
    </p>
    <table id="datatable">
        <thead class="table table-striped table-sm table-success">
            <tr>
                <th>corde</th>
                <th>Total Integrantes</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->corde?></th>
                    <td><?=$key->total_integrantes?></td>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
</figure>
  <script src="<?=base_url() ?>code/highcharts.js"></script>
<script src="<?=base_url() ?>code/modules/data.js"></script>
<script src="<?=base_url() ?>code/modules/exporting.js"></script>
<script src="<?=base_url() ?>code/modules/accessibility.js"></script>

		<script type="text/javascript">
// Data retrieved from https://netmarketshare.com/
// Make monochrome colors
var pieColors = (function () {
    var colors = [],
        base = Highcharts.getOptions().colors[0],
        i;

    for (i = 0; i < 10; i += 1) {
        // Start out with a darkened base color (negative brighten), and end
        // up with a much brighter color
        colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
    }
    return colors;
}());

// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Integrantes por Corde ',
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
            colors: pieColors,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Share',
        data: [
            <?php foreach ($variable as $key):?>
      {
        name: '<?php echo $key->corde;?>',
        y:  <?php echo $key->total_integrantes;?>,
      },
      <?php endforeach;?>
        ]
    }]
});

		</script>
	</body>
</html>
