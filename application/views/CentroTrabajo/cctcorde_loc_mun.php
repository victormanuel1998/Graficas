<div class="container">
<div class="row">
    <div class="col">
    <p class="highcharts-description">
     Tipo de corde en las que se agrupan por Localidad y Municipio
    </p>
        <table class="table table-striped">
        <thead>
            <tr>
                <th width="20%">Corde</th>
                <th width="20%">Localidad</th>
                <th width="20%">Municipio</th>
            
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->Corde?></th>
                    <th><?=$key->Localidad ?></th>
                    <th><?=$key->Municipio ?></th>    
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
