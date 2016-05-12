<br>
<div class="fadeInDown animated">
<div class="row container padded" align="center">
<div class="one fifth"></div>
<div class="three fifths">
<form  id="form" method="GET" action="<?=base_url()?>profesorControlador/buscaConvenio">
    <input id="query" name="query" style="width:300px" type="text" placeholder="Introduzca matricula para buscar" maxlength="9">
    <br>
    <input class="info button" type="submit" value="Buscar" >
</form>
</div>

<div class="one fifth" align="right">
    <a class="success button" href="<?=base_url()?>profesorControlador/nuevoConvenio"><i class="icon-plus-sign-alt"></i> Nuevo Convenio</a>
</div>

</div>
<br>
<div class="container">
<table class="blue responsive" data-max="14">
  <thead>
    <tr>
      <th>Matricula</th>
      <th>Fecha Inicial</th>
			<th>Fecha Final</th>
      <th>Tiempo de Servicio</th>
			<th>Nombre de Dependencia</th>
			<th>Detalles</th>
    </tr>
  </thead>
  <tbody>
		<?php
					if ($result != FALSE){
						foreach ($result->result() as $row) {
						echo "<tr>";
							echo "<td>".$row->matricula."</td>";
							echo "<td>".$row->fecha_inicial."</td>";
							echo "<td>".$row->fecha_final."</td>";
							echo "<td>".$row->horas_servicio."</td>";
							echo "<td>".$row->nombre."</td>";

							echo "<td><a href='".base_url()."profesorControlador/detallesConvenio/".$row->idConvenio."'><i class='icon-info-sign icon-2x'></i></a>";
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							echo "<a href='".base_url()."profesorControlador/eliminarConvenio/".$row->idConvenio."'><i class='icon-remove icon-2x' style='color:red'></i></a></td>";

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
