<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sistema SS</title>

<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
<script src="../js/libs/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="../js/libs/jquery-1.10.2.min.js"></script>
<link type="text/css" rel="stylesheet" href="../css/groundwork.css">

<style>
body {background-color:lightblue;}
h5{color: green;}
</style>


</head>
<body>

<header class="padded">
<div class="container">
<div class="row">
<div class="one half">
  <h2 class="logo">
    <a href="<?=base_url()?>" style="text-decoration:none" >
      <img src="../images/uv.png" height="100" width="130" >

    <font color="black">Sistema Servicio Social </font>
      </a>
  </h2>

</div> </br></br></br></br>
<div class="one half" align="right">

  <a class="red button" href="<?=base_url()?>main/cerrarSesion" style="text-decoration:none" >


    <font color="white"><i class="icon-off"></i> Cerrar Sesion </font>
      </a>


</div>

</div>

<nav class="nav green" title="Servicio Social UV">
  <ul>
    <li><button><i class=" icon-file"></i> Enviar Documento</button>
      <ul>
        <li><a href="<?=base_url()?>main/verCartasAceptacion"><i class="icon-check"></i> Carta de Aceptacion</a ></li>
        <li><a href="<?=base_url()?>main/verCartasLiberacion"><i class="icon-unlock"></i> Carta de Liberacion</a></li>
				<li><a href="<?=base_url()?>main/verPlanDeActividades"><i class="icon-calendar"></i> Plan de Actividades</a></li>
      </ul>
    </li>
    <li><a href="<?=base_url()?>main/verReportes"><i class=" icon-upload-alt"></i> Enviar Reporte Mensual</a></li>
    <li><a href="<?=base_url()?>main/avances"><i class=" icon-tasks"></i> Avances del Alumno</a></li>
  </ul>
</nav>

</div>
</header>
