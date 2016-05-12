<div class="fadeInDown animated">
<div class="container row">
 <div class="one fifth"></div>
<div class="three fifths">
<fieldset>
  <legend><font FACE="arial" SIZE=5 COLOR=black>Datos de Dependencia</font></legend>
<dl>
  <dt>Nombre de Dependencia</dt>
  <dd style="border-bottom: 1px solid ">- <?=$nombre?></dd>
  <dt>Direccion</dt>
  <dd style="border-bottom: 1px solid ">- <?=$calle." ".$no." ".$colonia?></dd>
  <dt>Ciudad</dt>
  <dd style="border-bottom: 1px solid ">- <?=$ciudad?></dd>
  <dt>Estado</dt>
  <dd style="border-bottom: 1px solid ">- <?=$estado?></dd>
  <dt>Correo Electronico</dt>
  <dd style="border-bottom: 1px solid ">- <?=$eMail?></dd>
  <dt>Poblacion Atendida Directa</dt>
  <dd style="border-bottom: 1px solid ">- <?=$pobAtDirectos?></dd>
  <dt>Poblacion Atendida Indirecta</dt>
  <dd style="border-bottom: 1px solid ">- <?=$pobAtIndirectos?></dd>
  <dt>Sector</dt>
  <dd style="border-bottom: 1px solid ">- <?=$sector?></dd>
  <dt>Responsable</dt>
  <dd style="border-bottom: 1px solid ">- <?=$responsable?></dd>
  <dt>Telefono</dt>
  <dd style="border-bottom: 1px solid ">- <?=$telefono?></dd>
</dl>
</fieldset>
</div>
</div>
<br>

<div class="row" align="center">
   <form method="get">
    <a href="<?=base_url()?>profesorControlador/detallesDependencia/<?=$idDependencia?>"> <input type="submit" name="query" value="Actualizar Valores" class="success"> </a>
    <a class="red button" href="<?=base_url()?>profesorControlador/verDependencias">Regresar</a>
    </form>

</div>
<br>
</div>


