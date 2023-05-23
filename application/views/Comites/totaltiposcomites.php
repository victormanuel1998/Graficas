<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">
#container {
    height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#datatable {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

#datatable caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

#datatable th {
    font-weight: 600;
    padding: 0.5em;
}

#datatable td,
#datatable th,
#datatable caption {
    padding: 0.5em;
}

#datatable thead tr,
#datatable tr:nth-child(even) {
    background: #f8f8f8;
}

#datatable tr:hover {
    background: #f1f7ff;
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
       Gráfica donde representa el número total de los tipos de comités
    </p>
        <table id="datatable">
        <thead class="table table-striped table-sm table-success">
            <tr>
                <th>Comite</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->Comite?></th>
                    <td><?=$key->Total?></td>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
</figure>

		<script type="text/javascript">
Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total de tipos de comites'
    },
    subtitle: {
        text:
            '<?php echo date('Y') ?>'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Amount'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});

		</script>
	</body>
</html>
