<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
<div class="container">
<div class="row">
    <div class="col">
    <p class="highcharts-description">
       Acuerdos por tipos de comités 
    </p>
    <table class="table table-striped table-sm">
        <thead class="table-success ">
            <tr>
                <th width="20%">Acuerdo1</th>
                <th width="20%">Acuerdo2</th>
                <th width="20%">Acuerdo3</th>
                <th>Comites</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($variable as $key): ?>
                <tr>
                    <th><?=$key->Acuerdo1 ?></th>
                    <th><?=$key->Acuerdo2 ?></th>
                    <th><?=$key->Acuerdo3 ?></th>
                    <td><?=$key->Comites?></td>
                </tr>
            <?php endforeach ?>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
</div>
