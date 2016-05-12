<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>profesorControlador/actualizaPlan/<?=$idPlanActividades?>" method="post">
  <fieldset>
    <legend>Nuevo Plan de Actividades</legend>
      <div class="row">
        <div class="one third padded">
        </div>
        <div class="one third padded">
        <label for="nombreProy">Nombre del Proyecto</label>
        <input name="nombreProy" id="nombreProy" type="text" placeholder="Descripcion" value="<?=$nombreProy?>" required>
        </div>
      </div>
       <div class="row">
      <div class="one third padded">
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
      <div class="one third padded">
        <label for="descripcion">Descripcion General</label>
        <input name="descripcion" id="descripcion" type="text" placeholder="Descripcion" value="<?=$descripcion?>" required>
      </div>
      <div class="one third padded">
        <label for="objMediatos">Objetivos Mediatos</label>
        <input name="objMediatos" id="objMediatos" type="text" placeholder="Objetivos Mediatos" value="<?=$objMediatos?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="objInmediatos">Objetivos Inmediatos</label>
        <input name="objInmediatos" id="objInmediatos" type="text" placeholder="Objetivos Inmediatos" value="<?=$objInmediatos?>" required>
      </div>
      <div class="one third padded">
        <label for="metodologia">Metodologia</label>
        <input name="metodologia" id="metodologia" type="text" placeholder="Metodologia" value="<?=$metodologia?>" required>
      </div>
      <div class="one third padded">
        <label for="recursos">Recursos Humanos, Economicos y Materiales</label>
        <input name="recursos" id="recursos" type="text" placeholder="Recursos Humanos, Economicos y Materiales" value="<?=$recursos?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="actFuncionales">Actividades y Funciones</label>
        <input name="actFuncionales" id="actFuncionales" type="text" placeholder="Actividades y Funciones" value="<?=$actFuncionales?>" required>
      </div>
      <div class="one third padded">
        <label for="responsabilidades">Responsabilidades</label>
        <input name="responsabilidades" id="responsabilidades" type="text" placeholder="Responsabilidades" value="<?=$responsabilidades?>" required>
      </div>
      <div class="one third padded">
        <label for="duracion">Duracion</label>
        <input name="duracion" id="duracion" type="text" placeholder="Duracion" value="<?=$duracion?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="diasHoras">Dias y Horas</label>
        <input name="diasHoras" id="diasHoras" type="text" placeholder="Dias y Horas" value="<?=$diasHoras?>" required>
      </div>
      <div class="one third padded">
        <label for="mesActividades">Mes y Actividad</label>
        <input name="mesActividades" id="mesActividades" type="text" placeholder="Mes y Actividad" value="<?=$mesActividades?>" required>
      </div>
      <div class="one third padded">
        <label for="combo">dependencia</label>
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
    </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit" value="Actualizar">
    <a class="red button" href="<?=base_url()?>profesorControlador/detallesPlan/<?=$idPlanActividades?>">Cancelar</a>
</div>
</form>
</div>
</div>
