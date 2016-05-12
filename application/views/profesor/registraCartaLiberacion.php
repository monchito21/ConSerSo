<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>profesorControlador/guardarLiberacion" method="post">
  <fieldset>
    <legend>Registro de Carta de Liberación</legend>
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
    </div>
    <div class="row">
   <div class="one third padded">
     <label for="fecha">Fecha de Conclusion</label>
     <input type="date" name="fecha" class="" id="fecha" required>
   </div>
 </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit">
    <a class="red button" href="<?=base_url()?>profesorControlador/cartasLiberacion">Cancelar</a>
</div>
</form>
</div>
</div>
