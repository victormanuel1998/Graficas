<div class="container">
<div class="row">
    <div class="col">
    <div id="container"></div>
    <p class="highcharts-description">
       Programa estatal por localidad y Municipio
    </p>
        <table class= "table table-striped table-sm table-success">
        <thead>
            <tr>
                <th width="40%">Numprograma</th>
                <th width="40%">Programa </th>
                <th width="40%">CCT</th>
                <th width="40%">Municipio</th>
                
                
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                     <th><?=$key->Numprograma?></th>
                    <th><?=$key->NombrePrograma?></th>
                    <th><?=$key->CCT?></th>
                    <th><?=$key->Municipio ?></th>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
