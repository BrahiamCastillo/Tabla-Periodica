<?php 
  ///Declaración de array con los elementos de la tabla periódica, en conjunto a las clases que poseen el color...
  ///que los distingue, en conjunto a esto, se declararán los contadores que se usarán para generar la tabla.
  $bucle=0;
  $fila=0;

  $componentes=array(["elemento"=>"H", "clase"=>"otros-no-metales"],
  ["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],
  ["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],
  ["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],
  ["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],
  ["elemento"=>"He", "clase"=>"gases-nobles"],
  ["elemento"=>"Li", "clase"=>"alcalinos"],["elemento"=>"Be", "clase"=>"alcalinoterreos"],

  ["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],
  ["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],
  ["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],

  ["elemento"=>"B", "clase"=>"metaloides"],
  ["elemento"=>"C", "clase"=>"otros-no-metales"],["elemento"=>"N", "clase"=>"otros-no-metales"],["elemento"=>"O", "clase"=>"otros-no-metales"],
  ["elemento"=>"F", "clase"=>"halogenos"],["elemento"=>"Ne", "clase"=>"gases-nobles"],["elemento"=>"Na", "clase"=>"alcalinos"],
  ["elemento"=>"Mg", "clase"=>"alcalinoterreos"],
  ["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],
  ["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],
  ["elemento"=>"", "clase"=>"vacio"],["elemento"=>"", "clase"=>"vacio"],
  
  ["elemento"=>"Al", "clase"=>"otros-metales"],["elemento"=>"Si", "clase"=>"metaloides"],["elemento"=>"P", "clase"=>"otros-no-metales"],["elemento"=>"S", "clase"=>"otros-no-metales"],
  ["elemento"=>"Cl", "clase"=>"halogenos"],["elemento"=>"Ar", "clase"=>"gases-nobles"],["elemento"=>"K", "clase"=>"alcalinos"],["elemento"=>"Ca", "clase"=>"alcalinoterreos"],
  ["elemento"=>"Sc", "clase"=>"metales"],["elemento"=>"Ti", "clase"=>"metales"],["elemento"=>"V", "clase"=>"metales"],["elemento"=>"Cr", "clase"=>"metales"],["elemento"=>"Mn", "clase"=>"metales"],
  ["elemento"=>"Fe", "clase"=>"metales"],["elemento"=>"Co", "clase"=>"metales"],["elemento"=>"Ni", "clase"=>"metales"],["elemento"=>"Cu", "clase"=>"metales"],["elemento"=>"Zn", "clase"=>"metales"],
  ["elemento"=>"Ga", "clase"=>"otros-metales"],["elemento"=>"Ge", "clase"=>"metaloides"],["elemento"=>"As", "clase"=>"metaloides"],["elemento"=>"Se", "clase"=>"otros-no-metales"],
  ["elemento"=>"Br", "clase"=>"halogenos"],["elemento"=>"Kr", "clase"=>"gases-nobles"],["elemento"=>"Rb", "clase"=>"alcalinos"]);

  //Rb rubio por el momento


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Periódica</title>
    <link rel="stylesheet" href="folders\css\librarys\bootstrap\bootstrap.min.css">
    <link rel="stylesheet" href="folders\css\formato.css">
</head>
<body>
  <div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-5"><h2>Tabla periódica</h2></div>
    <div class="col-md-2"></div>
  </div>
 <div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">
 <table class="celdas" id="tabla0">
  <tr class="celdas" id="hr0">
  <?php 
  
  foreach ($componentes as $componente) {
    if($componente["elemento"]=="") {
      echo "<td WIDTH=50 HEIGHT=50 class='vacio celdas' id='filat{$fila}'>".$componente["elemento"]."</td>";
      $bucle++;
    } else {
      echo "<td WIDTH=50 HEIGHT=50 class='".$componente["clase"]." celdas' id='filat{$fila}'>".$componente["elemento"]."</td>";
      $bucle++;

      if($bucle==18) {
        echo "<tr></tr>";
        $bucle=0;
      }

    }
   
  }

?>
  </tr>
  </table>
  </div>
  <div class="col-md-2"></div>
 </div>
    
</body>
</html>