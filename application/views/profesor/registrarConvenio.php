
<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>profesorControlador/guardarConvenio" method="post">
  <fieldset>
    <legend>Nuevo Convenio</legend>
       <div class="row">
      <div class="one third padded">
        <label for="fecha_inicial">Fecha Inicial</label>
        <input type="date" name="fecha_inicial" class="" id="fecha_inicial" required>
      </div>
      <div class="one third padded">
        <label for="fecha_final">Fecha Final</label>
        <input type="date" name="fecha_final" class="" id="fecha_final" required>
      </div>
      <div class="one third padded">
        <label for="horas_servicio">Tiempo de Servicio</label>
        <input name="horas_servicio" id="horas_servicio" type="text" placeholder="Numero de horas" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="dependencia">Nombre de Dependencia</label>
        <select class="" name="idDependencia">
          <?php
            if ($filas1 != FALSE){?>
              <option value disabled selected>Seleccione Dependencia</option>
           <?php foreach($filas1->result() as $docen){?>
           <option value="<?=$docen->idDependencia?>"><?=$docen->nombre?></option>
           <?php }?>
            <?php }
           ?>
        </select>
      </div>
      <div class="one third padded">
        <label for="matricula">Matricula:</label>
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
    <input class="success button" type="submit">
    <a class="red button" href="<?=base_url()?>profesorControlador/verConvenio">Cancelar</a>
</div>
</form>
</div>
</div>
