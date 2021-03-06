<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>main/guardarPlan" method="post">
  <fieldset>
    <legend>Nuevo Plan de Actividades</legend>
      <div class="row">
        <div class="one third padded">
        </div>
        <div class="one third padded">
        <label for="nombreProy">Nombre del Proyecto</label>
        <input name="nombreProy" id="nombreProy" type="text" placeholder="Descripcion" required>
        </div>
      </div>
       <div class="row">
      <div class="one third padded">
        <label for="">Matricula:</label>
        <label for=""><?php echo $this->session->userdata('matricula');?></label>
        <input name="matricula" id="matricula" value=<?php echo $this->session->userdata('matricula');?> class="hidden">
      </div>
      <div class="one third padded">
        <label for="descripcion">Descripcion General</label>
        <input name="descripcion" id="descripcion" type="text" placeholder="Descripcion" required>
      </div>
      <div class="one third padded">
        <label for="objMediatos">Objetivos Mediatos</label>
        <input name="objMediatos" id="objMediatos" type="text" placeholder="Objetivos Mediatos" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="objInmediatos">Objetivos Inmediatos</label>
        <input name="objInmediatos" id="objInmediatos" type="text" placeholder="Objetivos Inmediatos" required>
      </div>
      <div class="one third padded">
        <label for="metodologia">Metodologia</label>
        <input name="metodologia" id="metodologia" type="text" placeholder="Metodologia" required>
      </div>
      <div class="one third padded">
        <label for="recursos">Recursos Humanos, Economicos y Materiales</label>
        <input name="recursos" id="recursos" type="text" placeholder="Recursos Humanos, Economicos y Materiales" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="actFuncionales">Actividades y Funciones</label>
        <input name="actFuncionales" id="actFuncionales" type="text" placeholder="Actividades y Funciones" required>
      </div>
      <div class="one third padded">
        <label for="responsabilidades">Responsabilidades</label>
        <input name="responsabilidades" id="responsabilidades" type="text" placeholder="Responsabilidades" required>
      </div>
      <div class="one third padded">
        <label for="duracion">Duracion</label>
        <input name="duracion" id="duracion" type="text" placeholder="Duracion" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="diasHoras">Dias y Horas</label>
        <input name="diasHoras" id="diasHoras" type="text" placeholder="Dias y Horas" required>
      </div>
      <div class="one third padded">
        <label for="mesActividades">Mes y Actividad</label>
        <input name="mesActividades" id="mesActividades" type="text" placeholder="Mes y Actividad" required>
      </div>
      <div class="one third padded">
        <label for="combo">Dependencia</label>
        <label for="Dependencia">
          <?php
                if ($filas != FALSE){
                  foreach ($filas->result() as $row) {
                    $dependencia=$row->idDependencia;
                    echo "".$row->nombre."";
                  }
                }
                else{
                  echo "NO se encontro";
                }
            ?>
        </label>
        <input name="idDependencia" id="idDependencia" value= <?php echo $dependencia?> class="hidden" >
      </div>
    </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit">
    <a class="red button" href="<?=base_url()?>main/verPlanDeActividades">Cancelar</a>
</div>
</form>
</div>
</div>
