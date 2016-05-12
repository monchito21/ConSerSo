<br>
<div class="fadeInDown animated">
  <script>
  function cargar() {
          window.open("<?=base_url()?>PDFS/<?php echo $this->session->userdata('matricula')?>/PlanDeActividades.pdf");
  }
  </script>
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
          if ($filas != FALSE){
            foreach ($filas->result() as $row) {
            echo "<tr>";
              echo "<td>".$row->matricula."</td>";
              echo "<td>".$row->nombreProy."</td>";
              echo "<td>".$row->descripcion."</td>";
              echo "<td>".$row->actFuncionales."</td>";
              echo "<td>".$row->responsabilidades."</td>";
              echo "<td>".$row->duracion."</td>";
              if($dep != FALSE)
              foreach ($dep->result() as $row1) {
                echo "<td>".$row1->nombre."</td>";
              }
              echo "<td><a onClick='cargar()'><i class='icon-info-sign icon-2x'></i></a>";
              echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";


            echo "</tr>";
            }
          }
          else{

          }
          ?>
  </tbody>
</table>

</div>
<br>
<?php   if ($filas == FALSE){?>
<div class="row" align="center">
    <a class="success button" href="<?=base_url()?>main/regPlanActividades"><i class="icon-plus-sign-alt"></i> Nuevo Plan de Actividades</a>
</div>
<?php } ?>

</div>
