<div class="fadeInDown animated">

<div class="container padded">
<form action="<?=base_url()?>profesorControlador/actualizaDocente/<?=$idDocente?>" method="post">
  <fieldset>
    <legend>Registro de Docente</legend>
       <div class="row">
      <div class="one third padded">
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" placeholder="Nombre" value="<?=$nombre?>" required>
      </div>
      <div class="one third padded">
        <label for="aPaterno">Apellido Paterno</label>
        <input id="aPaterno" name="aPaterno"type="text" placeholder="Apellido Paterno" value="<?=$aPaterno?>" required>
      </div>
      <div class="one third padded">
        <label for="aMaterno">Apellido Materno</label>
        <input id="aMaterno" name="aMaterno" type="text" placeholder="Apellido Materno"  value="<?=$aMaterno?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="cargo">Cargo</label>
        <input id="cargo" name="cargo" type="text" placeholder="Cargo" value="<?=$cargo?>" required>
      </div>
      <div class="one third padded">
        <label for="eMail">Correo Electronico</label>
        <input id="eMail" name="eMail" type="text" placeholder="Correo Electronico" value="<?=$eMail?>" required>
      </div>
    </div>
    <div class="row">
      <div class="one third padded">
        <label for="usuario">Matricula </label>
        <input id="usuario" name="usuario" type="text" placeholder="Nuevo Usuario" value="<?=$usuario?>" required>
      </div>
      <div class="one third padded">
        <label for="contrasenha">Contraseña</label>
        <input id="contrasenha" name="contrasenha" type="text" placeholder="Contraseña" value="<?=$contrasenha?>" required>
      </div>
      <div class="one third padded">
        <label for="contra2">Repita contraseña</label>
        <input id="contra2" type="text" placeholder="Repita la Contraseña" required>
      </div>
    </div>
  </fieldset>
  <br>
  <div class="row" align="center">
    <input class="success button" type="submit" value="Actualizar">
    <a class="red button" href="<?=base_url()?>profesorControlador/detallesDocente/<?=$idDocente?>">Cancelar</a>
</div>
</form>
</div>
</div>
