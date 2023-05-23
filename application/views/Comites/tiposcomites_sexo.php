<div class="container">
<div class="row">
    <div class="col">
    <p class="highcharts-description">
      Número total tipos comités por generos
       </p>
        <table class="table table-striped table-sm table-success">
        <thead>
            <tr>
                <th width="20%">tipocomite</th>
                <th width="10%">total</th>
                <th width="10%">sexo</th>

            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->tipocomite ?></th>
                    <th><?=$key->total ?></th>
                    <th><?=$key->sexo ?></th>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>

