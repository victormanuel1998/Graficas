<div class="container">
<div class="row">
    <div class="col">
    <p class="highcharts-description">
       Acuerdos por tipos de comités por localidad y Municipio
    </p>
        <table class="table table-striped table-sm table-success ">
        <thead >
            <tr>
                <th width="20%">Comites</th>
                <th width="10%">Total</th>
                <th width="10%">Sexo</th>
                <th width="10%">Localidad</th>
               <th width="10%">Municipio</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->tipocomite ?></th>
                    <th><?=$key->total ?></th>
                    <th><?=$key->sexo ?></th>
                    <th><?=$key->NomLocalidad ?></th>
                    <th><?=$key->Municipio?></th>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>

