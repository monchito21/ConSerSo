<div class="fadeInDown animated">
<div class="container row">
 <div class="one fifth"></div>
<div class="three fifths">
<fieldset>
  <legend><font FACE="arial" SIZE=5 COLOR=black>Datos del Docente</font></legend>
<dl>
  <dt>Nombre Completo</dt>
  <dd style="border-bottom: 1px solid ">- <?=$nombre." ".$aPaterno." ".$aMaterno?></dd>
  <dt>Cargo</dt>
  <dd style="border-bottom: 1px solid ">- <?=$cargo?></dd>
  <dt>Correo Electronico</dt>
  <dd style="border-bottom: 1px solid ">- <?=$eMail?></dd>
  <dt>Matricula</dt>
  <dd style="border-bottom: 1px solid ">- <?=$usuario?></dd>
  <dt>Contraseña</dt>
  <dd style="border-bottom: 1px solid ">- <?=$contrasenha?></dd>
</dl>
</fieldset>
</div>
</div>
<br>

<div class="row" align="center">
   <form method="get">
    <a href="<?=base_url()?>profesorControlador/detallesDocente/<?=$idDocente?>"> <input type="submit" name="query" value="Actualizar Valores" class="success"> </a>
    <a class="red button" href="<?=base_url()?>profesorControlador/verDocentes">Regresar</a>
    </form>

</div>
<br>
</div>
