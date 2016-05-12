<br>
<div class="fadeInDown animated">
<div class="row container padded" align="center">
<div class="one fifth"></div>
<div class="three fifths">
<form  id="form" method="GET" action="<?=base_url()?>profesorControlador/buscaReporte">
    <input id="query" name="query" style="width:300px" type="text" placeholder="Introduzca matricula para buscar" maxlength="9">
    <br>
    <input class="info button" type="submit" value="Buscar" >
</form>
</div>

<div class="one fifth" align="right">
    <a class="success button" href="<?=base_url()?>profesorControlador/regReporte"><i class="icon-plus-sign-alt"></i> Nuevo Reporte</a>
</div>

</div>

<br>
<div class="container">
<table class="blue responsive" data-max="14">
  <thead>
    <tr>
      <th>Matricula</th>
      <th>N°</th>
      <th>Mes</th>
      <th>Horas Reportadas</th>
      <th>Horas Acumuladas</th>
      <th>Responsable</th>
      <th>Detalles</th>

    </tr>
  </thead>
  <tbody>
    <?php
          if ($result != FALSE){
            foreach ($result->result() as $row) {
            echo "<tr>";
              echo "<td>".$row->matricula."</td>";
              echo "<td>".$row->noReporte."</td>";
              echo "<td>".$row->mes."</td>";
              echo "<td>".$row->horasReportadas."</td>";
              echo "<td>".$row->horasAcumuladas."</td>";
              echo "<td>".$row->responsableDirecto."</td>";
              echo "<td><a href='".base_url()."profesorControlador'><i class='icon-info-sign icon-2x'></i></a>";
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              echo "<a href='".base_url()."profesorControlador/eliminarReporte/".$row->idReporte."'><i class='icon-remove icon-2x' style='color:red'></i></a></td>";

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
