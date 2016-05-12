<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sistema SS</title>

<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
<script src="<?=base_url()?>js/libs/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/libs/jquery-1.10.2.min.js"></script>
<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/groundwork.css">

<style>
body {background-color:lightblue;}
</style>


</head>
<body>

<header class="padded">
<div class="container">
<div class="row">
<div class="one half">
  <h2 class="logo">
    <a href="<?=base_url()?>" style="text-decoration:none" >
      <img src="<?=base_url()?>images/uv.png" height="100" width="130" >

    <font color="black">Sistema Servicio Social </font>
      </a>
  </h2>

</div> </br></br></br></br>
<div class="one half" align="right">

  <a class="red button" href="<?=base_url()?>" style="text-decoration:none" >


    <font color="white"><i class="icon-off"></i> Cerrar Sesion </font>
      </a>


</div>

</div>

<nav class="nav green" title="Servicio Social UV">
  <ul>
  <li><a href="<?=base_url()?>profesorControlador/verAlumnos"><i class="icon-archive"></i> Alumnos</a ></li>


<li><button><i class=" icon-file-text"></i> Documentos</button>
  <ul>
    <li><a href="<?=base_url()?>profesorControlador/verReportes"><i class=" icon-file-alt"></i> Reporte Mensual</a></li>
    <li><button><i class="icon-mail-reply"></i> Documentos Recibidos</button>
      <ul>
        <li><a href="<?=base_url()?>profesorControlador/verCartasAceptacion"><i class="icon-file-text-alt"></i> Cartas de Aceptacion</a></li>
        <li><a href="<?=base_url()?>profesorControlador/verCartasLiberacion"><i class="icon-unlock"></i> Cartas de Liberacion</a></li>
        <li><a href="<?=base_url()?>profesorControlador/verPlanDeActividades"><i class="icon-sort-by-attributes-alt"></i> Plan de Actividades</a></li>
      </ul>
    </li>
  </ul>
</li>
    <li><a href="<?=base_url()?>profesorControlador/avance"><i class=" icon-file-alt"></i> Avances del alumno</a></li>

  </ul>
</nav>

</div>
</header>
