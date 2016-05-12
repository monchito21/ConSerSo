<br>
<div class="fadeInDown animated">
<div class="row" align="center">
    <form  id="form" method="GET" action="<?=base_url()?>main/buscaReporte">
    <input id="query" style="width:300px" name="query" type="text" placeholder="Introduzca matricula para buscar" maxlength="10">
    <br>
    <input class="info button" type="submit" value="Buscar" />
  </form>
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
              echo "<td><a href='".base_url()."main'><i class='icon-info-sign icon-2x'></i></a>";
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
              echo "<a href='".base_url()."main/eliminarReporte/".$row->idReporte."'><i class='icon-remove icon-2x' style='color:red'></i></a></td>";

            echo "</tr>";
            }
          }
          else{
            echo heading("no hay reporte registrado",3);
          }
          ?>
  </tbody>
</table>

</div>
<br>

<div class="row" align="center">
    <a class="success button" href="<?=base_url()?>main/regReporte"><i class="icon-file-text"></i> Nuevo Reporte</a>

</div>


</div>
