<br>
<div class="fadeInDown animated">
  <script>
  function cargar() {
        	window.open("<?=base_url()?>PDFS/<?php echo $this->session->userdata('matricula')?>/CartaAceptacion.pdf");
  }
  </script>
<br>
<div class="container">
<table class="blue responsive" data-max="14">
  <thead>
    <tr>
      <th>Matricula</th>
      <th>Fecha Realizacion</th>
      <th>Fecha Inicial</th>
      <th>Fecha Final</th>
      <th>Detalles</th>
    </tr>
  </thead>
  <tbody>
    <?php
          if ($filas != FALSE){
            foreach ($filas->result() as $row) {
            echo "<tr>";
              echo "<td>".$row->matricula."</td>";
              $fechaA=$row->fechaActual;
              $fechaA= nice_date($fechaA, 'd-m-Y');
              echo "<td>".$fechaA."</td>";
              $fechaA=$row->fechaActual;
              $fechaA= nice_date($fechaA, 'd-m-Y');
              echo "<td>".$row->fechaInicio."</td>";
              echo "<td>".$row->fechaFin."</td>";
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
<?php   if ($filas == FALSE){?>
<div class="row" align="center">
    <a class="success button" href="<?=base_url()?>main/regCartaAceptacion" ><i class="icon-plus-sign-alt"></i> Registrar Carta de Aceptacion</a>
</div>
<?php } ?>

</div>
