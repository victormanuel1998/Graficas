   
<div class="container">
<div class="row">
    <div class="col">

    <p class="highcharts-description">
     Tipos de acuerdos generales por localidad por el consejo
    </p>
        <table class="table table-striped">
        <thead class ="table-sm">
            <tr>
                <th width="20%">Comites</th>
                <th width="20%">Localidad</th>
                <th width="20%">AsuntoGeneral</th>
                
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <td><?=$key->Descripcion?></td>
                    <td><?=$key->NomLocalidad?></td>
                    <td><?=$key->AsuntoGeneral?></td>
                    
                    
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
