<div class="fadeInDown animated">
<div class="container row">
 <div class="one fifth"></div>
<div class="three fifths">
<fieldset>
  <legend><font FACE="arial" SIZE=5 COLOR=black>Datos Carta de Liberacion</font></legend>
<dl>
  <dt>Fecha de Liberacion</dt>
  <dd style="border-bottom: 1px solid ">- <?=$fecha?></dd>
  <dt>Matricula del Alumno</dt>
  <dd style="border-bottom: 1px solid ">- <?=$matricula?></dd>
</dl>
</fieldset>
</div>
</div>
<br>

<div class="row" align="center">
   <form method="get">
    <a href="<?=base_url()?>profesorControlador/detallesLiberacion/<?=$idCartaLiberacion?>"> <input type="submit" name="query" value="Actualizar Valores" class="success"> </a>
    <a class="red button" href="<?=base_url()?>profesorControlador/verCartasLiberacion">Regresar</a>
    </form>

</div>
<br>
</div>


