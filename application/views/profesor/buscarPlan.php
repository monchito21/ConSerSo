<br>
<div class="fadeInDown animated">
<div class="row container padded" align="center">
<div class="one fifth"></div>
<div class="three fifths">
<form  id="form" method="GET" action="<?=base_url()?>profesorControlador/buscaPlan">
    <input id="query" name="query" style="width:300px" type="text" placeholder="Introduzca matricula para buscar" maxlength="9">
    <br>
    <input class="info button" type="submit" value="Buscar" >
</form>
</div>

<div class="one fifth" align="right">
    <a class="success button" href="<?=base_url()?>profesorControlador/regPlanActividades"><i class="icon-plus-sign-alt"></i> Nuevo Plan de Actividades</a>
</div>

</div>

<br>
<div class="container">
<table class="blue responsive" data-max="14">
  <thead>
    <tr>
      <th>Matricula</th>
      <th>Nombre de Proyecto</th>
      <th>Descripcion</th>
      <th>Actividades y Funciones</th>
      <th>Responsabilidades</th>
      <th>Duracion</th>
      <th>Dependencia</th>
      <th>Detalles</th>
    </tr>
  </thead>
  <tbody>
    <?php
          if ($result != FALSE){
            foreach ($result->result() as $row) {
            echo "<tr>";
              echo "<td>".$row->matricula."</td>";
              echo "<td>".$row->nombreProy."</td>";
              echo "<td>".$row->descripcion."</td>";
              echo "<td>".$row->actFuncionales."</td>";
              echo "<td>".$row->responsabilidades."</td>";
              echo "<td>".$row->duracion."</td>";
              echo "<td>".$row->idDependencia."</td>";

              echo "<td><a href='".base_url()."profesorControlador'><i class='icon-info-sign icon-2x'></i></a>";
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              echo "<a href='".base_url()."profesorControlador/eliminarPlan/".$row->idPlanActividades."'><i class='icon-remove icon-2x' style='color:red'></i></a></td>";

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
