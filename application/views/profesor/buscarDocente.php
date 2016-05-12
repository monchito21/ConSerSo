<br>
<div class="fadeInDown animated">
<div class="row container padded" align="center">
<div class="one fifth"></div>
<div class="three fifths">
<form  id="form" method="GET" action="<?=base_url()?>profesorControlador/buscaDocente">
    <input id="query" name="query" style="width:300px" type="text" placeholder="Introduzca matricula para buscar" maxlength="9">
    <br>
    <input class="info button" type="submit" value="Buscar" >
</form>
</div>

<div class="one fifth" align="right">
    <a class="success button" href="<?=base_url()?>profesorControlador/nuevoDocente"><i class="icon-plus-sign-alt"></i> Nuevo Docente</a>
</div>

</div>

<br>
<div class="container">
<table class="blue responsive" data-max="14">
  <thead>
    <tr>
      <th>Usuario</th>
      <th>Nombre</th>
      <th>A. Paterno</th>
      <th>A. Materno</th>
      <th>Cargo</th>
      <th>Correo Electronico</th>
      <th>Detalles</th>
    </tr>
  </thead>
  <tbody>
    <?php
          if ($result != FALSE){
            foreach ($result->result() as $row) {
            echo "<tr>";
              echo "<td>".$row->usuario."</td>";
              echo "<td>".$row->nombre."</td>";
              echo "<td>".$row->aPaterno."</td>";
              echo "<td>".$row->aMaterno."</td>";
              echo "<td>".$row->cargo."</td>";
              echo "<td>".$row->eMail."</td>";
              echo "<td>  <a href='".base_url()."profesorControlador/detallesDocente/".$row->idDocente."'><i class='icon-remove icon-2x' style='color:red'></i></a>";
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              echo "<a href='".base_url()."profesorControlador/eliminarDocente/".$row->idDocente."'><i class='icon-remove icon-2x' style='color:red'></i></a></td>";

            echo "</tr>";
            }
          }
          else{
            echo "no hay enlaces";
          }
          ?>
  </tbody>
</table>

</div>
<br>

</div>
