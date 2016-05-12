<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>main/guardarLiberacion" method="post">
  <fieldset>
    <legend>Registro de Carta de Liberación</legend>
    <div class="row">
      <div class="one third padded">
        <label for="">Matricula:</label>
        <label for=""><?php echo $this->session->userdata('matricula');?></label>
        <input name="matricula" id="matricula" value=<?php echo $this->session->userdata('matricula');?> class="hidden">
      </div>
    </div>
    <div class="row">
   <div class="one third padded">
     <label for="fecha">Fecha de Conclusion</label>
     <input type='date' name="fecha" class="" id="fecha" required>
   </div>
 </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit">
    <a class="red button" href="<?=base_url()?>main/cartasLiberacion">Cancelar</a>
</div>
</form>
</div>
</div>
