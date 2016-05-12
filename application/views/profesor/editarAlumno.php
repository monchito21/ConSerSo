<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>profesorControlador/actualizaAlumno/<?=$matricula?>" method="post">
  <fieldset>
    <legend>Registro de Alumno</legend>
       <div class="row">
      <div class="one third padded">
        <label for="nombre">Nombre</label>
        <input name="nombre" id="nombre" type="text" placeholder="Nombre" value="<?=$nombre?>" required>
      </div>
      <div class="one third padded">
        <label for="aPaterno">Apellido Paterno</label>
        <input name="aPaterno" id="aPaterno" type="text" placeholder="Apellido Paterno" value="<?=$aPaterno?>" required>
      </div>
      <div class="one third padded">
        <label for="aMaterno">Apellido Materno</label>
        <input name="aMaterno" id="aMaterno" type="text" placeholder="Apellido Materno" value="<?=$aMaterno?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="matricula">Matricula</label>
        <input name="matricula" id="matricula" type="text" placeholder="Matricula" value="<?=$matricula?>" required>
      </div>
      <div class="one third padded">
        <label for="carrera">Carrera</label>
        <input name="carrera" id="carrera" type="text" placeholder="Carrera del Alumno" value="<?=$carrera?>" required>
      </div>
      <div class="one third padded">
        <label for="bloque">Bloque</label>
        <input name="bloque" id="bloque" type="text" placeholder="Bloque" value="<?=$bloque?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="seccion">Seccion</label>
        <input name="seccion" id="seccion" type="text" placeholder="Seccion" value="<?=$seccion?>" required>
      </div>
      <div class="one third padded">
        <label for="contra">Contraseña</label>
        <input name="contrasenha" id="contrasenha" type="text" placeholder="Contraseña" value="<?=$contrasenha?>" required>
      </div>
      <div class="one third padded">
        <label for="contra2">Repita contraseña</label>
        <input name="contra" id="contra2" type="text" placeholder="Repita la Contraseña" required>
      </div>
    </div>
    <div class="row">
      <div class="one half padded">
        <label for="combo">Docente</label>
        <select class="form-control" name="idDocente" id="idDocente" value="<?=$idDocente?>">
          <?php
            if ($filas != FALSE){?>
              <option value disabled selected>Seleccione Docente:</option>
           <?php foreach($filas->result() as $docen){?>
           <option value="<?=$docen->idDocente?>"><?=$docen->nombre?></option>
           <?php }?>
            <?php }
           ?>
        </select>
      </div>
      <div class="one third padded">
          <label for="combo">Activo</label>
          <select class="form-control" name="Activo" id="Activo">
            <option value disabled selected>Seleccione estado:</option>
            <option value=1>Activo</option>
            <option value=0>Inactivo</option>
          </select>
      </div>
    </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit" value="Actualizar">
    <a class="red button" href="<?=base_url()?>profesorControlador/detallesAlumno/<?=$matricula?>">Cancelar</a>
</div>
</form>
</div>
</div>
