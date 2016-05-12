<div class="container padded fadeInUp animated">


<p class="info box dismissible" align="center"><font size=5>Mas detalle de los documentos enviados</u> </font></p>

</br>
<table class="blue responsive" data-max="14">
  <thead>
    <tr>
      <th>Nombre de Archivo</th>
      <th>Fecha de Entrega</th>
      <th>Descargar</th>
      </tr>
  </thead>
  <tbody>
    <?php

          if ($info != FALSE){
            foreach ($info as $file) {
            echo "<tr>";
    $nombre=$file['name'];
    $fecha=$file['date'];
    $fecha= unix_to_human($fecha);
    $fecha= nice_date($fecha, 'd-m-Y');

              echo "<td>".$nombre."</td>";
              echo "<td>".$fecha."</td>";
              echo "<td>".anchor('main/downloads/'.$nombre,$nombre)."</td>";

            echo "</tr>";
            }
          }
          else{
           echo heading('No hay archivos para descargar', 3);
          }

          ?>
  </tbody>
</table>

</div>
