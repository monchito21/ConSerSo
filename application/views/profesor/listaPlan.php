<div class="fadeInDown animated">
<div class="container row">
 <div class="one fifth"></div>
<div class="three fifths">
<fieldset>
  <legend><font FACE="arial" SIZE=5 COLOR=black>Datos Plan de Actividades</font></legend>
<dl>
  <dt>Nombre de Proyecto</dt>
  <dd style="border-bottom: 1px solid ">- <?=$nombreProy?></dd>
  <dt>Descripcion</dt>
  <dd style="border-bottom: 1px solid ">- <?=$descripcion?></dd>
  <dt>Objetivos Inmediatos</dt>
  <dd style="border-bottom: 1px solid ">- <?=$objInmediatos?></dd>
  <dt>Objetivos Mediatos</dt>
  <dd style="border-bottom: 1px solid ">- <?=$objMediatos?></dd>
  <dt>Metodologia</dt>
  <dd style="border-bottom: 1px solid ">- <?=$metodologia?></dd>
  <dt>Recursos</dt>
  <dd style="border-bottom: 1px solid ">- <?=$recursos?></dd>
  <dt>Actividades y Funciones</dt>
  <dd style="border-bottom: 1px solid ">- <?=$actFuncionales?></dd>
  <dt>Responsabilidades</dt>
  <dd style="border-bottom: 1px solid ">- <?=$responsabilidades?></dd>
  <dt>Duracion</dt>
  <dd style="border-bottom: 1px solid ">- <?=$duracion?></dd>
  <dt>Dias y Horario</dt>
  <dd style="border-bottom: 1px solid ">- <?=$diasHoras?></dd>
  <dt>Actividades Mensuales</dt>
  <dd style="border-bottom: 1px solid ">- <?=$mesActividades?></dd>
  <dt>Matricula del Alumno</dt>
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
    <a href="<?=base_url()?>profesorControlador/detallesPlan/<?=$idPlanActividades?>"> <input type="submit" name="query" value="Actualizar Valores" class="success"> </a>
    <a class="red button" href="<?=base_url()?>profesorControlador/verPlanDeActividades">Regresar</a>
    </form>

</div>
<br>
</div>


