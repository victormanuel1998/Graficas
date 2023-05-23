<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<div class="container">
<div class="row">
    <div class="col">
    
    <p class="highcharts-description">
       Actividades por tipos de comités 
    </p>
        <table class="table table-striped table-sm table-success">
        <thead >
            <tr>
                <th width="20%">Descripcion</th>
                <th width="20%">Actividad_1</th>
                <th width="20%">Actividad_2</th>
                <th width="20%">Actividad_3</th>
                <th width="20%">Actividad_4</th>
                <th width="20%">Actividad_5</th>
                <th width="20%">cicloescolar_activo</th>
            
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->Descripcion?></th>
                    <th><?=$key->Actividad_1 ?></th>
                    <th><?=$key->Actividad_2 ?></th>
                    <th><?=$key->Actividad_3 ?></th>
                    <th><?=$key->Actividad_4?></th>
                    <th><?=$key->Actividad_5?></th>
                    <th><?=$key->cicloescolar_activo?></th>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
