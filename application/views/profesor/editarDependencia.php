<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>profesorControlador/actualizaDependencia/<?=$idDependencia?>" method="post">
  <fieldset>
    <legend>Registrar Dependencia</legend>
       <div class="row">
      <div class="one third padded">
        <label for="nombre">Nombre</label>
        <input name="nombre" id="nombre" type="text" placeholder="Nombre" value="<?=$nombre?>" required>
      </div>
      <div class="one third padded">
        <label for="calle">Calle</label>
        <input name="calle" id="calle" type="text" placeholder="Calle" value="<?=$calle?>" required>
      </div>
      <div class="one third padded">
        <label for="no">Numero</label>
        <input name="no" id="no" type="text" placeholder="Numero" value="<?=$no?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="colonia">Colonia</label>
        <input name="colonia" id="colonia" type="text" placeholder="Colonia" value="<?=$colonia?>" required>
      </div>
      <div class="one third padded">
        <label for="ciudad">Ciudad</label>
        <input name="ciudad" id="ciudad" type="text" placeholder="Ciudad" value="<?=$ciudad?>" required>
      </div>
      <div class="one third padded">
        <label for="estado">Estado</label>
        <input name="estado" id="estado" type="text" placeholder="Estado" value="<?=$estado?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="telefono">Telefono</label>
        <input name="telefono" id="telefono" type="text" placeholder="Telefono" value="<?=$telefono?>" required>
      </div>
      <div class="one third padded">
        <label for="eMail">Correo Electronico</label>
        <input name="eMail" id="eMail" type="email" placeholder="Correo Electronico" value="<?=$eMail?>" required>
      </div>
      <div class="one third padded">
        <label for="sector">Sector</label>
        <input name="sector" id="sector" type="text" placeholder="Sector" value="<?=$sector?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="pobAtDirectos">N° usuarios directos</label>
        <input name="pobAtDirectos" id="pobAtDirectos" type="text" placeholder="N° usuarios directos" value="<?=$pobAtDirectos?>" required>
      </div>
      <div class="one third padded">
        <label for="pobAtIndirectos">N° usuarios Indirectos</label>
        <input name="pobAtIndirectos" id="pobAtIndirectos" type="text" placeholder="N° usuarios Indirectos" value="<?=$pobAtIndirectos?>" required>
      </div>
      <div class="one third padded">
        <label for="responsable">Responsable</label>
        <input name="responsable" id="responsable" type="text" placeholder="Responsable" value="<?=$responsable?>" required>
      </div>
    </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit" value="Actualizar">
    <a class="red button" href="<?=base_url()?>profesorControlador/detallesDependencia/<?=$idDependencia?>">Cancelar</a>
</div>
</form>
</div>
</div>
