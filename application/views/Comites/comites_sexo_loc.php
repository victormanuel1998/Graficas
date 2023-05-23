<div class="container">
<div class="row">
    <div class="col">
    <p class="highcharts-description">
       Acuerdos por tipos de comités que se agrupan por Localidad
    </p>
        <table class="table table-striped table-sm table-success">
        <thead>
            <tr>
                <th width="20%">tipocomite</th>
                <th width="10%">total</th>
                <th width="10%">sexo</th>
                <th width="10%">NomLocalidad</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->tipocomite ?></th>
                    <th><?=$key->total ?></th>
                    <th><?=$key->sexo ?></th>
                    <th><?=$key->NomLocalidad ?></th>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
