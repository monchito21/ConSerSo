<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>profesorControlador/actualizaAceptacion/<?=$idCartaAceptacion?>" method="post">
  <fieldset>
    <legend>Registro de Carta de Aceptacion</legend>
       <div class="row">
      <div class="one third padded">
        <label for="fechaActual">Fecha Actual</label>
        <input name="fechaActual" type="date" id="fechaActual" value="<?=$fechaActual?>" required>
      </div>
      <div class="one third padded">
        <label for="fechaInicio">Fecha de Inicio</label>
        <input name="fechaInicio" type="date" id="fechaInicio" value="<?=$fechaInicio?>" required>
      </div>
      <div class="one third padded">
        <label for="fechaFin">Fecha de Finalizacion</label>
        <input name="fechaFin" type="date" id="fechaFin" value="<?=$fechaFin?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one half padded">
        <label for="combo">Matricula</label>
        <select class="" name="matricula">
          <?php
            if ($filas != FALSE){?>
              <option value disabled selected>Seleccione Matricula</option>
           <?php foreach($filas->result() as $docen){?>
           <option value="<?=$docen->matricula?>"><?=$docen->matricula?></option>
           <?php }?>
            <?php }
           ?>
        </select>
      </div>
    </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit" value="Actualizar">
    <a class="red button" href="<?=base_url()?>profesorControlador/detallesAceptacion/<?=$idCartaAceptacion?>">Cancelar</a>
</div>
</form>
</div>
</div>
