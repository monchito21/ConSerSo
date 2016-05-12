<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>main/guardarAceptacion" method="post">
  <fieldset>
    <legend>Registro de Carta de Aceptacion</legend>
       <div class="row">
      <div class="one third padded">
        <label for="fechaActual">Fecha Actual</label>
        <input type="date" name="fechaActual" class="" id="cal" required>
      </div>
      <div class="one third padded">
        <label for="fechaInicio">Fecha de Inicio</label>
        <input type="date" name="fechaInicio" class="" id="fechaInicio" required>
      </div>
      <div class="one third padded">
        <label for="fechaFinal">Fecha de Finalizacion</label>
        <input type="date" name="fechaFinal" class="" id="fechaFinal" required>
      </div>
    </div>
    <div class="row">
      <div class="one half padded">
        <label for="">Matricula:</label>
        <input value=<?php echo $this->session->userdata('matricula');?> disabled="true">
        <input name="matricula" id="matricula" value=<?php echo $this->session->userdata('matricula');?> class="hidden">
      </div>

    </div>
  </fieldset>
  <br>
  <div class="row" align="center">

    <input class="success button" type="submit">
    <a class="red button" href="<?=base_url()?>main/verCartasAceptacion">Cancelar</a>
</div>
</form>
</div>
</div>
