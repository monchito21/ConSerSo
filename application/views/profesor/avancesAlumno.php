<br>
<div class="fadeInDown animated">
<div class="row container padded" align="center">
<div class="one fifth"></div>
<div class="three fifths">
<form  id="form" method="GET" action="<?=base_url()?>profesorControlador/avance">
    <input id="query" name="query" style="width:300px" type="text" placeholder="Introduzca matricula para buscar" maxlength="9">
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
    var_dump($result);

           foreach ($result->result() as $row) {
         echo $row->matricula;
       }
    			//if ($info != FALSE){
    				//foreach ($info as $file) {
    				echo "<tr>";
    //$nombre=$file['name'];
    //$fecha=$file['date'];
    //$fecha= unix_to_human($fecha); 
    //$fecha= nice_date($fecha, 'd-m-Y');

          //echo "<td>".$result."</td>";
 					//echo "<td>".$nombre."</td>";
          //echo "<td>".$fecha."</td>";
 					echo "<td><a href='".base_url()."profesorControlador'><i class='icon-search icon-2x'></i></a>";
             
    				echo "</tr>";
    				//}
    			//}
    			//else{
    			//	echo "no hay archivos para mostrar";
    			//}
    			?>
  </tbody>
</table>

</div>
<br>
</div>