<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ESTADISTICAS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        CentroTrabajo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?=base_url('index.php/CentroTrabajo/sexo_integrante_ct_municipio')?>">Matrícula por Sexo, CT y municipio</a>
            <a class="dropdown-item" href="<?=base_url('index.php/CentroTrabajo/ct_localidad') ?>">Total CT por localidad</a>
            <a class="dropdown-item" href="<?=base_url('index.php/CentroTrabajo/CCTmunicipios') ?>">Total CT por municipio</a>
            <a class="dropdown-item" href="<?=base_url('index.php/CentroTrabajo/cctcorde_loc_mun') ?>">Corde por localidad y Por el Municipio que Pertenecen</a>
            <a class="dropdown-item" href="<?=base_url('index.php/CentroTrabajo/tiposescuelas') ?>">Total tipos de centros trabajo</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Integrantes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item"href="<?=base_url('index.php/Integrantes/sexointegrantes')?>" >NÚmero de integrantes por sexo</a>
            <a class="dropdown-item"href="<?=base_url('index.php/Integrantes/integrantescnhijos') ?>">Integrantes que tienen hijos</a>
            <a class="dropdown-item"href="<?=base_url('index.php/Integrantes/integrantes_corde') ?>">Integrantes por code </a>
            <a class="dropdown-item"href="<?=base_url('index.php/Integrantes/total_sex_corde')?>" >Número de integrantes por sexo por corde</a>
            <a class="dropdown-item"href="<?=base_url('index.php/Integrantes/sexomunicipio')?>" >Número de integrantes por sexo por el municipio</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Actas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item"href="<?=base_url('index.php/Acta/acuerdos_tiposcomites') ?>" >Acuerdos por tipos de Comites</a>
            <a class="dropdown-item" href="<?=base_url('index.php/Acta/acuerdos_tiposcomites_localidad') ?>">Acuerdos por tipos de Comites por localidad</a>
            <a class="dropdown-item" href="<?=base_url('index.php/Acta/total_tipos_actas') ?>">Total del número de tipos de actas</a>
            <a  class="dropdown-item"href="<?=base_url('index.php/Acta/acuerdos_tiposcomites_loc_Mun') ?>">Acuerdos por tipos de Comites por localidad por municipio</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Comites
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item"href="<?=base_url('index.php/Comites/totaltiposcomites') ?>" >Total de números tipos de comités </a>
            <a class="dropdown-item"href="<?=base_url('index.php/Comites/comites_actividades') ?>" > Comites por actividades </a>
            <a class="dropdown-item"href="<?=base_url('index.php/Comites/comites_integrantes') ?>" > Tipos comités por integrantes </a>
            <a class="dropdown-item"href="<?=base_url('index.php//Comites/comites_sexo_loc') ?>" >Total números comites por genero  y localidad </a>
            <a class="dropdown-item"href="<?=base_url('index.php//Comites/comites_sexo_loc_municipio') ?>" >Total números comités por genero  y localidad y municipio </a>
            <a class="dropdown-item"href="<?=base_url('index.php//Comites/tiposcomites_sexo') ?>" >Total números comités por genero </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Consejos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item"href="<?=base_url('index.php/Consejos/consejos_asunto') ?>" >Tipos de asuntos de generales por el consejo de la localidad </a>
        </div>
      </li>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item"href="<?=base_url('index.php/Programa/programaestatal_loc') ?>" > Programa estatal_localidad </a>
            <a class="dropdown-item"href="<?=base_url('index.php/Programa/programaestatal_loc_mun') ?>" > Programaestatal por localidad e municipio</a>
            <a class="dropdown-item"href="<?=base_url('index.php/Programa/Totalprogramaestatal_cct') ?>" > CCT por total de programa estatal  </a>
            <a class="dropdown-item"href="<?=base_url('index.php/Programa/programamunicipal_cct') ?>" > Número de programas municipales por el cct del municipio</a>
       
        </div>
      </li>
    </ul>
  </div>
</nav>
  <header>
