<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>profesorControlador/guardarDependencia" method="post">
  <fieldset>
    <legend>Registrar Dependencia</legend>
       <div class="row">
      <div class="one third padded">
        <label for="nombre">Nombre</label>
        <input name="nombre" id="nombre" type="text" placeholder="Nombre" required>
      </div>
      <div class="one third padded">
        <label for="calle">Calle</label>
        <input name="calle" id="calle" type="text" placeholder="Calle" required>
      </div>
      <div class="one third padded">
        <label for="no">Numero</label>
        <input name="no" id="no" type="text" placeholder="Numero" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="colonia">Colonia</label>
        <input name="colonia" id="colonia" type="text" placeholder="Colonia" required>
      </div>
      <div class="one third padded">
        <label for="ciudad">Ciudad</label>
        <input name="ciudad" id="ciudad" type="text" placeholder="Ciudad" required>
      </div>
      <div class="one third padded">
        <label for="estado">Estado</label>
        <input name="estado" id="estado" type="text" placeholder="Estado" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="telefono">Telefono</label>
        <input name="telefono" id="telefono" type="text" placeholder="Telefono" required>
      </div>
      <div class="one third padded">
        <label for="eMail">Correo Electronico</label>
        <input name="eMail" id="eMail" type="email" placeholder="Correo Electronico" required>
      </div>
      <div class="one third padded">
        <label for="sector">Sector</label>
        <input name="sector" id="sector" type="text" placeholder="Sector" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="pobAtDirectos">N° usuarios directos</label>
        <input name="pobAtDirectos" id="pobAtDirectos" type="text" placeholder="N° usuarios directos" required>
      </div>
      <div class="one third padded">
        <label for="pobAtIndirectos">N° usuarios Indirectos</label>
        <input name="pobAtIndirectos" id="pobAtIndirectos" type="text" placeholder="N° usuarios Indirectos" required>
      </div>
      <div class="one third padded">
        <label for="responsable">Responsable</label>
        <input name="responsable" id="responsable" type="text" placeholder="Responsable" required>
      </div>
    </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit">
    <a class="red button" href="<?=base_url()?>profesorControlador/verDependencias">Cancelar</a>
</div>
</form>
</div>
</div>
