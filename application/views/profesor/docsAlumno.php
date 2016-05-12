
<br>
<div class="fadeInDown animated">
<div class="row container padded" align="center">
<div class="one fifth"></div>
<div class="three fifths">
<form  id="form" method="GET" action="<?=base_url()?>profesorControlador/pdfsAlumno">
    <input id="query" name="query" style="width:300px" type="text" placeholder="Introduzca matricula para buscar" maxlength="10">
    <br>
    <input class="info button" type="submit" value="Buscar" >
</form>
</div>

</div>

<br>
<div class="container">
<table class="blue responsive" data-max="14">
  <thead>
    <tr>
      <th>Matricula</th>
      <th>Nombre de Archivo</th>
      <th>Fecha de Creacion</th>
      <th>Ver</th>
    </tr>
  </thead>
  <tbody>
 <?php
    foreach ($info as $file) {
    echo "<tr>";
    $nombre=$file['name'];
    $fecha=$file['date'];

    $fecha= unix_to_human($fecha); 
    $fecha= nice_date($fecha, 'Y-m-d');
        echo "<td>".$mat."</td>";
        echo "<td>".$nombre."</td>";
        echo "<td>".$fecha."</td>";
        echo "<td><a  onClick='cargar()' ><i class='icon-remove icon-2x' style='color:red'></i></a></td>";
              
            echo "</tr>";
            }

        
        ?>
  </tbody>
</table>

</div>
<br>
</div>

<script>
  function cargar() {
      window.open("<?=base_url()?>PDFS/<?php echo $mat?>/<?php echo $nombre?>");
  }
  </script>