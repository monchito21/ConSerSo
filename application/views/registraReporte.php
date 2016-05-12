<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>main/guardarReporte" method="post">
  <fieldset>
    <legend>Nuevo Reporte Mensual</legend>
       <div class="row">
         <div class="one third padded">
           <label for="noReporte">N° de Reporte</label>
           <input name="noReporte" id="noReporte" type="text" placeholder="N° de Reporte" required>
         </div>
      <div class="one third padded">
        <label for="mes">Mes</label>
        <input name="mes" id="mes" type="text" placeholder="Mes" required>
      </div>
      <div class="one third padded">
        <label for="horasReportadas">Horas Reportadas</label>
        <input name="horasReportadas" id="horasReportadas" type="text" placeholder="Horas Reportadas" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="responsableDirecto">Responsable Directo</label>
        <input name="responsableDirecto" id="responsableDirecto" type="text" placeholder="Responsable Directo" required>
      </div>
      <div class="one third padded">
        <label for="periodo">Periodo</label>
        <input name="periodo" id="periodo" type="text" placeholder="Periodo" required>
      </div>
      <div class="one third padded">
        <label for="">Matricula:</label>
        <label  for=""><?php echo $this->session->userdata('matricula');?></label>
        <input class="" name="matricula" value="<?php echo $this->session->userdata('matricula');?>" >
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="actividad">Actividad:</label>
        <textarea id="actividad" name="actividad" rows="8" cols="40" placeholder="Actividad"></textarea>
      </div>
      <div class="one third padded">
        <label for="observacion">Observaciones</label>
        <textarea name="observacion" rows="8" cols="40" placeholder="Observaciones"></textarea>
      </div>
    </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit">
    <a class="red button" href="<?=base_url()?>main/verReportes">Cancelar</a>
</div>
</form>
</div>
</div>
