<div class="fadeInDown animated">
<div class="container row">
 <div class="one fifth"></div>
<div class="three fifths">
<fieldset>
  <legend><font FACE="arial" SIZE=5 COLOR=black>Datos Carta de Aceptacion</font></legend>
<dl>
  <dt>Fecha de Creacion</dt>
  <dd style="border-bottom: 1px solid ">- <?=$fechaActual?></dd>
  <dt>Fecha de Inicio</dt>
  <dd style="border-bottom: 1px solid ">- <?=$fechaInicio?></dd>
  <dt>Fecha de Finalizacion</dt>
  <dd style="border-bottom: 1px solid ">- <?=$fechaFin?></dd>
  <dt>Matricula del Alumno</dt>
  <dd style="border-bottom: 1px solid ">- <?=$matricula?></dd>
</dl>
</fieldset>
</div>
</div>
<br>

<div class="row" align="center">
   <form method="get">
    <a href="<?=base_url()?>profesorControlador/detallesAceptacion/<?=$idCartaAceptacion?>"> <input type="submit" name="query" value="Actualizar Valores" class="success"> </a>
    <a class="red button" href="<?=base_url()?>profesorControlador/verCartasAceptacion">Regresar</a>
    </form>

</div>
<br>
</div>


