<div class="container">
<div class="row">
    <div class="col">
    
    <div id="container"></div>
    <p class="highcharts-description">
       Programas por el Municipio y Localidad
    </p>
        <table class="table table-striped table-sm table-success">
        <thead>
            <tr>
                <th width="40%">Programa </th>
                <th width="40%">Localidad</th>
                <th width="40%">Municipio</th>
                
                
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->NombrePrograma ?></th>
                    <th><?=$key->NomLocalidad ?></th>
                    <th><?=$key->Municipio ?></th>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
