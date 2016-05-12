<br>
<div class="fadeInDown animated">
  <script>
  function cargar() {
        	window.open("<?=base_url()?>PDFS/<?php echo $this->session->userdata('matricula')?>/ReporteMensual.pdf");
  }
  </script>
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
          if ($filas != FALSE){
            foreach ($filas->result() as $row) {
            echo "<tr>";
              echo "<td>".$row->matricula."</td>";
              echo "<td>".$row->noReporte."</td>";
              echo "<td>".$row->mes."</td>";
              echo "<td>".$row->horasReportadas."</td>";
              echo "<td>".$row->horasAcumuladas."</td>";
              echo "<td>".$row->responsableDirecto."</td>";
              echo "<td><a onClick='cargar()'><i class='icon-info-sign icon-2x'></i></a>";
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

            echo "</tr>";
            }
          }
          else{
            echo heading("no se encontro el archivo",3);
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
