<br>
<div class="fadeInDown animated">
<div class="row container padded" align="center">
<div class="one fifth"></div>
<div class="three fifths">
<form  id="form" method="GET" action="<?=base_url()?>profesorControlador/buscaAlumno">
    <input id="query" name="query" style="width:300px" type="text" placeholder="Introduzca matricula para buscar" maxlength="9">
    <br>
    <input class="info button" type="submit" value="Buscar" >
</form>
</div>

<div class="one fifth" align="right">
    <a class="success button" href="<?=base_url()?>profesorControlador/nuevoAlumno"><i class="icon-plus-sign-alt"></i> Nuevo Alumno</a>
</div>

</div>
<br>
    <div class="container">
<table class="blue responsive" data-max="14">
  <thead>
    <tr>
      <th>Matricula</th>
      <th>Nombre</th>
      <th>A. Paterno</th>
      <th>A. Materno</th>
      <th>Carrera</th>
      <th>Detalles</th>
    </tr>
  </thead>
  <tbody>
    <?php
    			if ($result != FALSE){
    				foreach ($result->result() as $row) {
    				echo "<tr>";
    					echo "<td>".$row->matricula."</td>";
    					echo "<td>".$row->nombre."</td>";
              echo "<td>".$row->aPaterno."</td>";
              echo "<td>".$row->aMaterno."</td>";
              echo "<td>".$row->carrera."</td>";
    					echo "<td><a href='".base_url()."profesorControlador/verAlumnos'><i class='icon-info-sign icon-2x'></i></a>";
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              echo "<a  href='".base_url()."profesorControlador/eliminarAlumno/".$row->matricula."'><i class='icon-remove icon-2x' style='color:red'></i></a></td>";

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