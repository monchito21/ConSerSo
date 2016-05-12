<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>profesorControlador/guardarAlumno" method="post">
  <fieldset>
    <legend>Registro de Alumno</legend>
       <div class="row">
      <div class="one third padded">
        <label for="nombre">Nombre</label>
        <input name="nombre" id="nombre" type="text" placeholder="Nombre" required>
      </div>
      <div class="one third padded">
        <label for="aPaterno">Apellido Paterno</label>
        <input name="aPaterno" id="aPaterno" type="text" placeholder="Apellido Paterno" required>
      </div>
      <div class="one third padded">
        <label for="aMaterno">Apellido Materno</label>
        <input name="aMaterno" id="aMaterno" type="text" placeholder="Apellido Materno" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="matricula">Matricula</label>
        <input name="matricula" id="matricula" type="text" placeholder="Matricula" required>
      </div>
      <div class="one third padded">
        <label for="carrera">Carrera</label>
        <input name="carrera" id="carrera" type="text" placeholder="Carrera del Alumno" required>
      </div>
      <div class="one third padded">
        <label for="bloque">Bloque</label>
        <input name="bloque" id="bloque" type="text" placeholder="Bloque" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="seccion">Seccion</label>
        <input name="seccion" id="seccion" type="text" placeholder="Seccion" required>
      </div>
      <div class="one third padded">
        <label for="contra">Contraseña</label>
        <input name="contrasenha" id="contrasenha" type="text" placeholder="Contraseña" required>
      </div>
      <div class="one third padded">
        <label for="contra2">Repita contraseña</label>
        <input name="contra" id="contra2" type="text" placeholder="Repita la Contraseña" required>
      </div>
    </div>
    <div class="row">
      <div class="one half padded">
        <label for="combo">Docente</label>
        <select class="form-control" name="idDocente" id="idDocente">
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
    </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit">
    <a class="red button" href="<?=base_url()?>profesorControlador/verAlumnos">Cancelar</a>
</div>
</form>
</div>
</div>
