
<div class="container">
<div class="row">
    <div class="col">
    
    <p class="highcharts-description">
       Actividades por tipos de comités 
    </p>
        <table class="table table-bordered border-primary">
        <thead class ="table-sm">
            <tr>
                <th width="20%">tipocomite </th>
                <th width="20%">nombre</th>
            
            
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->tipocomite ?></th>
                    <th><?=$key->nombre ?></th>
            
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
