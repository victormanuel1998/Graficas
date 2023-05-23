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
<script src="../../code/highcharts.js"></script>
<script src="../../code/modules/data.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Chart showing how an HTML table can be used as the data source for the
        chart using the Highcharts data module. The chart is built by
        referencing the existing HTML data table in the page. Several common
        data source types are available, including CSV and Google Spreadsheet.
    </p>

    <table id="datatable">
        <thead>
            <tr>
                <th></th>
                <th>Boys</th>
                <th>Girls</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>2016</th>
                <td>30 386</td>
                <td>28 504</td>
            </tr>
            <tr>
                <th>2017</th>
                <td>29 173</td>
                <td>27 460</td>
            </tr>
            <tr>
                <th>2018</th>
                <td>28 430</td>
                <td>26 690</td>
            </tr>
            <tr>
                <th>2019</th>
                <td>28 042</td>
                <td>26 453</td>
            </tr>
            <tr>
                <th>2020</th>
                <td>27 063</td>
                <td>25 916</td>
            </tr>
            <tr>
                <th>2021</th>
                <td>28 684</td>
                <td>27 376</td>
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
        text: 'Live births in Norway'
    },
    subtitle: {
        text:
            'Source: <a href="https://www.ssb.no/en/statbank/table/04231" target="_blank">SSB</a>'
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
