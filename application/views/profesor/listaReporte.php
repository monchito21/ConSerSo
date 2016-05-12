<div class="fadeInDown animated">
<div class="container row">
 <div class="one fifth"></div>
<div class="three fifths">
<fieldset>
  <legend><font FACE="arial" SIZE=5 COLOR=black>Datos de Reporte</font></legend>
<dl>
  <dt>Numero de Reporte</dt>
  <dd style="border-bottom: 1px solid ">- <?=$noReporte?></dd>
  <dt>Mes</dt>
  <dd style="border-bottom: 1px solid ">- <?=$horasReportadas?></dd>
  <dt>Horas Acumuladas</dt>
  <dd style="border-bottom: 1px solid ">- <?=$horasAcumuladas?></dd>
  <dt>Observacion</dt>
  <dd style="border-bottom: 1px solid ">- <?=$observacion?></dd>
  <dt>Periodo</dt>
  <dd style="border-bottom: 1px solid ">- <?=$periodo?></dd>
  <dt>Actividad</dt>
  <dd style="border-bottom: 1px solid ">- <?=$actividad?></dd>
  <dt>Responsable Directo</dt>
  <dd style="border-bottom: 1px solid ">- <?=$responsableDirecto?></dd>
  <dt>Matricula</dt>
  <dd style="border-bottom: 1px solid ">- <?=$matricula?></dd>
</dl>
</fieldset>
</div>
</div>
<br>

<div class="row" align="center">
   <form method="get">
    <a href="<?=base_url()?>profesorControlador/detallesReporte/<?=$idReporte?>"> <input type="submit" name="query" value="Actualizar Valores" class="success"> </a>
    <a class="red button" href="<?=base_url()?>profesorControlador/verReportes">Regresar</a>
    </form>

</div>
<br>
</div>


