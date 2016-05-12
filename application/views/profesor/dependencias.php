<br>
<div class="fadeInDown animated">
<div class="row container padded" align="center">
<div class="one fifth"></div>
<div class="three fifths">
<form  id="form" method="GET" action="<?=base_url()?>profesorControlador/buscaDependencia">
    <input id="query" name="query" style="width:300px" type="text" placeholder="Introduzca matricula para buscar" maxlength="9">
    <br>
    <input class="info button" type="submit" value="Buscar" >
</form>
</div>

<div class="one fifth" align="right">
    <a class="success button" href="<?=base_url()?>profesorControlador/nuevaDependencia"><i class="icon-plus-sign-alt"></i> Nueva Dependencia</a>
</div>

</div>

<br>
<div class="container">
<table class="blue responsive" data-max="14">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Responsable</th>
      <th>Telefono</th>
      <th>Correo Electronico</th>
      <th>Sector</th>
      <th>Detalles</th>
    </tr>
  </thead>
  <tbody>
    <?php
          if ($filas != FALSE){
            foreach ($filas->result() as $row) {
            echo "<tr>";
              echo "<td>".$row->nombre."</td>";
              echo "<td>".$row->responsable."</td>";
              echo "<td>".$row->telefono."</td>";
              echo "<td>".$row->eMail."</td>";
              echo "<td>".$row->sector."</td>";
              echo "<td><a href='".base_url()."profesorControlador/detallesDependencia/".$row->idDependencia."'><i class='icon-info-sign icon-2x'></i></a>";
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              echo "<a href='".base_url()."profesorControlador/eliminarDependencia/".$row->idDependencia."'><i class='icon-remove icon-2x' style='color:red'></i></a></td>";

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
