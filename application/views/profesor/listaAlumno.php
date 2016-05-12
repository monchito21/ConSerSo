<div class="fadeInDown animated">
<div class="container row">
 <div class="one fifth"></div>
<div class="three fifths">
<fieldset>
  <legend><font FACE="arial" SIZE=5 COLOR=black>Datos del Alumno</font></legend>
<dl>
  <?php  if($Activo==0){
    $estado='Alumno Inactivo';
  }else{
    $estado='';
  }
  ?>
  <h4 style="color: red"><?=$estado?></h4>
  <dt>Matricula</dt>
  <dd style="border-bottom: 1px solid ">- <?=$matricula?></dd>
  <dt>Nombre Completo</dt>
  <dd style="border-bottom: 1px solid ">- <?=$nombre." ".$aPaterno." ".$aMaterno?></dd>
  <dt>Carrera</dt>
  <dd style="border-bottom: 1px solid ">- <?=$carrera?></dd>
  <dt>Seccion</dt>
  <dd style="border-bottom: 1px solid ">- <?=$seccion?></dd>
  <dt>Bloque</dt>
  <dd style="border-bottom: 1px solid ">- <?=$bloque?></dd>
    <dt>Docente Asignado</dt>
  <dd style="border-bottom: 1px solid ">- <?=$idDocente?></dd>
  <dt>Contraseña</dt>
  <dd style="border-bottom: 1px solid ">- <?=$contrasenha?></dd>
</dl>
</fieldset>
</div>
</div>
<br>

<div class="row" align="center">
   <form method="get">
    <a href="<?=base_url()?>profesorControlador/detallesAlumno/<?=$matricula?>"> <input type="submit" name="query" value="Actualizar Valores" class="success"> </a>
    <a class="red button" href="<?=base_url()?>profesorControlador/verAlumnos">Regresar</a>
    </form>

</div>
<br>
</div>
