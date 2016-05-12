<div class="fadeInDown animated">
<div class="container row">
 <div class="one fifth"></div>
<div class="three fifths">
<fieldset>
  <legend><font FACE="arial" SIZE=5 COLOR=black>Datos de Convenio</font></legend>
<dl>
  <dt>Fecha de Inicio</dt>
  <dd style="border-bottom: 1px solid ">- <?=$fecha_inicial?></dd>
  <dt>Fecha Final</dt>
  <dd style="border-bottom: 1px solid ">- <?=$fecha_final?></dd>
  <dt>Horas de Servicio</dt>
  <dd style="border-bottom: 1px solid ">- <?=$horas_servicio?></dd>
  <dt>Matricula</dt>
  <dd style="border-bottom: 1px solid ">- <?=$matricula?></dd>
  <dt>Dependencia</dt>
  <dd style="border-bottom: 1px solid ">- <?=$idDependencia?></dd>
</dl>
</fieldset>
</div>
</div>
<br>

<div class="row" align="center">
   <form method="get">
    <a href="<?=base_url()?>profesorControlador/detallesConvenio/<?=$idConvenio?>"> <input type="submit" name="query" value="Actualizar Valores" class="success"> </a>
    <a class="red button" href="<?=base_url()?>profesorControlador/verConvenio">Regresar</a>
    </form>

</div>
<br>
</div>


