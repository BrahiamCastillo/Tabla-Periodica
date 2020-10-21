<?php 
  ///Declaración de array con los elementos de la tabla periódica, en conjunto a las clases que poseen el color...
  ///que los distingue, en conjunto a esto, se declararán los contadores que se usarán para generar la tabla.

  $bucle=0;
  $fila=0;
  $division=0;

  $componentes=array(["elemento"=>"H", "clase"=>"otros-no-metales"],

  ///Estructura de la tabla, no se deben tocar las líneas debajo de este comentario
  ///------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],
  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],
  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],
  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],

  ///Aquí termina la primera estructura, no se deben tocar las líneas antes de este comentario

  ["elemento"=>"He", "clase"=>"gases-nobles"],
  ["elemento"=>"Li", "clase"=>"alcalinos"],["elemento"=>"Be", "clase"=>"alcalinoterreos"],

  ///Estructura de la tabla, no se deben tocar las líneas debajo de este comentario
  ///------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],
  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],
  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],

  ///Aquí termina la primera estructura, no se deben tocar las líneas antes de este comentario

  ["elemento"=>"B", "clase"=>"metaloides"],
  ["elemento"=>"C", "clase"=>"otros-no-metales"],["elemento"=>"N", "clase"=>"otros-no-metales"],["elemento"=>"O", "clase"=>"otros-no-metales"],
  ["elemento"=>"F", "clase"=>"halogenos"],["elemento"=>"Ne", "clase"=>"gases-nobles"],["elemento"=>"Na", "clase"=>"alcalinos"],
  ["elemento"=>"Mg", "clase"=>"alcalinoterreos"],

   ///Estructura de la tabla, no se deben tocar las líneas debajo de este comentario
   ///------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],
  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],
  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],

  ///Aquí termina la primera estructura, no se deben tocar las líneas antes de este comentario
  
  ["elemento"=>"Al", "clase"=>"otros-metales"],["elemento"=>"Si", "clase"=>"metaloides"],["elemento"=>"P", "clase"=>"otros-no-metales"],["elemento"=>"S", "clase"=>"otros-no-metales"],
  ["elemento"=>"Cl", "clase"=>"halogenos"],["elemento"=>"Ar", "clase"=>"gases-nobles"],["elemento"=>"K", "clase"=>"alcalinos"],["elemento"=>"Ca", "clase"=>"alcalinoterreos"],
  ["elemento"=>"Sc", "clase"=>"metales"],["elemento"=>"Ti", "clase"=>"metales"],["elemento"=>"V", "clase"=>"metales"],["elemento"=>"Cr", "clase"=>"metales"],["elemento"=>"Mn", "clase"=>"metales"],
  ["elemento"=>"Fe", "clase"=>"metales"],["elemento"=>"Co", "clase"=>"metales"],["elemento"=>"Ni", "clase"=>"metales"],["elemento"=>"Cu", "clase"=>"metales"],["elemento"=>"Zn", "clase"=>"metales"],
  ["elemento"=>"Ga", "clase"=>"otros-metales"],["elemento"=>"Ge", "clase"=>"metaloides"],["elemento"=>"As", "clase"=>"metaloides"],["elemento"=>"Se", "clase"=>"otros-no-metales"],
  ["elemento"=>"Br", "clase"=>"halogenos"],["elemento"=>"Kr", "clase"=>"gases-nobles"],["elemento"=>"Rb", "clase"=>"alcalinos"],["elemento"=>"Sr", "clase"=>"alcalinoterreos"],
  ["elemento"=>"Y", "clase"=>"metales"],["elemento"=>"Zr", "clase"=>"metales"],["elemento"=>"Nb", "clase"=>"metales"],["elemento"=>"Mo", "clase"=>"metales"],["elemento"=>"Tc", "clase"=>"metales"],
  ["elemento"=>"Ru", "clase"=>"metales"],["elemento"=>"Rh", "clase"=>"metales"],["elemento"=>"Pd", "clase"=>"metales"],["elemento"=>"Ag", "clase"=>"metales"],["elemento"=>"Cd", "clase"=>"metales"],
  ["elemento"=>"ln", "clase"=>"otros-metales"],["elemento"=>"Sn", "clase"=>"otros-metales"],["elemento"=>"Sb", "clase"=>"metaloides"],["elemento"=>"Te", "clase"=>"metaloides"],
  ["elemento"=>"I", "clase"=>"halogenos"],["elemento"=>"Xe", "clase"=>"gases-nobles"],["elemento"=>"Cs", "clase"=>"alcalinos"],["elemento"=>"Ba", "clase"=>"alcalinoterreos"],["elemento"=>"La-Lu", "clase"=>"lantanidos"],
  ["elemento"=>"Hf", "clase"=>"metales"],["elemento"=>"Ta", "clase"=>"metales"],["elemento"=>"W", "clase"=>"metales"],["elemento"=>"Re", "clase"=>"metales"],["elemento"=>"Os", "clase"=>"metales"],
  ["elemento"=>"Ir", "clase"=>"metales"],["elemento"=>"Pt", "clase"=>"metales"],["elemento"=>"Aug", "clase"=>"metales"],["elemento"=>"Hg", "clase"=>"metales"],["elemento"=>"Tl", "clase"=>"otros-metales"],
  ["elemento"=>"Pb", "clase"=>"otros-metales"],["elemento"=>"Bi", "clase"=>"otros-metales"],["elemento"=>"Po", "clase"=>"metaloides"],["elemento"=>"At", "clase"=>"halogenos"],["elemento"=>"Rn", "clase"=>"gases-nobles"],
  ["elemento"=>"Fr", "clase"=>"alcalinos"],["elemento"=>"Ra", "clase"=>"alcalinoterreos"],["elemento"=>"Ac-Lr", "clase"=>"actinidos"],["elemento"=>"Rf", "clase"=>"metales"],["elemento"=>"Db", "clase"=>"metales"],
  ["elemento"=>"Sg", "clase"=>"metales"],["elemento"=>"Bh", "clase"=>"metales"],["elemento"=>"Hs", "clase"=>"metales"],["elemento"=>"Mt", "clase"=>"metales"],["elemento"=>"Ds", "clase"=>"metales"],["elemento"=>"Rg", "clase"=>"metales"],
  ["elemento"=>"Cn", "clase"=>"metales"],["elemento"=>"Nh", "clase"=>"otros-metales"],["elemento"=>"Fl", "clase"=>"otros-metales"],["elemento"=>"Mc", "clase"=>"otros-metales"],["elemento"=>"Lv", "clase"=>"otros-metales"],
  ["elemento"=>"Ts", "clase"=>"halogenos"],["elemento"=>"Og", "clase"=>"gases-nobles"],

  ///Estructura de la tabla, no se deben tocar las líneas debajo de este comentario
  ///------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],

    ///Aquí termina la primera estructura, no se deben tocar las líneas antes de este comentario

  ["elemento"=>"La", "clase"=>"lantanidos"],["elemento"=>"Ce", "clase"=>"lantanidos"],["elemento"=>"Pr", "clase"=>"lantanidos"],["elemento"=>"Nd", "clase"=>"lantanidos"],["elemento"=>"Pm", "clase"=>"lantanidos"],
  ["elemento"=>"Sm", "clase"=>"lantanidos"],["elemento"=>"Eu", "clase"=>"lantanidos"],["elemento"=>"Gd", "clase"=>"lantanidos"],["elemento"=>"Tb", "clase"=>"lantanidos"],["elemento"=>"Dy", "clase"=>"lantanidos"],
  ["elemento"=>"Ho", "clase"=>"lantanidos"],["elemento"=>"Er", "clase"=>"lantanidos"],["elemento"=>"Tm", "clase"=>"lantanidos"],["elemento"=>"Yb", "clase"=>"lantanidos"],["elemento"=>"Lu", "clase"=>"lantanidos"],

  ///Estructura de la tabla, no se deben tocar las líneas debajo de este comentario
  ///------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  ["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],["elemento"=>"  ", "clase"=>"celdas-vacias"],

      ///Aquí termina la primera estructura, no se deben tocar las líneas antes de este comentario

  ["elemento"=>"Ac", "clase"=>"actinidos"],["elemento"=>"Th", "clase"=>"actinidos"],["elemento"=>"Pa", "clase"=>"actinidos"],["elemento"=>"U", "clase"=>"actinidos"],["elemento"=>"Np", "clase"=>"actinidos"],
  ["elemento"=>"Pu", "clase"=>"actinidos"],["elemento"=>"Am", "clase"=>"actinidos"],["elemento"=>"Cm", "clase"=>"actinidos"],["elemento"=>"Bk", "clase"=>"actinidos"],["elemento"=>"Cf", "clase"=>"actinidos"],
  ["elemento"=>"Es", "clase"=>"actinidos"],["elemento"=>"Fm", "clase"=>"actinidos"],["elemento"=>"Md", "clase"=>"actinidos"],["elemento"=>"No", "clase"=>"actinidos"],["elemento"=>"Lr", "clase"=>"actinidos"]);


?>
<!--- La parte de HTML pura --->

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
 <table id="tabla0">
  <tr id="tr0">

  <?php 
  
  foreach ($componentes as $componente) {
    if($componente["elemento"]=="") {
      echo "<td WIDTH=50 HEIGHT=50 class='vacio celdas' id='filat{$fila}'>".$componente["elemento"]."</td>";
      $bucle++;
      $division++;
    } else if($componente["clase"]=="celdas-vacias") {
      echo "<td WIDTH=50 HEIGHT=50 class='".$componente["clase"]."' id='filat{$fila}'>".$componente["elemento"]."</td>";
      $bucle++;
      $division++;

    } else {
      echo "<td WIDTH=50 HEIGHT=50 class='".$componente["clase"]." celdas' id='filat{$fila}'>".$componente["elemento"]."</td>";
      $bucle++;
      $division++;

    }
    if($bucle==18) {
      echo "<tr></tr>";
      $bucle=0;
    }
    if($division==126) {
     echo "</tr>
     </table>
     </div>
     <div class='col-md-2'></div>
     </div>
     <br></br>
     <div class='row'>
     <div class='col-md-2'></div>
     <div class='col-md-8'>
     <table>
     <tr>";
    }
  }

?>

</tr>
</table>
</div>
<div class="col-md-2"></div>
</div>
<br></br>
<div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8"><table>
   <thead>
   <th WIDTH=500 HEIGHT=25 class="vacio celdas">Metales</th>
   <th WIDTH=150 HEIGHT=25 class="metaloides celdas"></th>
   <th WIDTH=250 HEIGHT=25 class="vacio celdas">No Metales</th>
   </thead>
   <tbody>
   </tbody>
   </table>
   </div>
   <div class="col-md-2"></div>
   </div>

   <div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8"><table>
     <td WIDTH=100 HEIGHT=30 class="celdas alcalinos">Alcalinos
     </td>
     <td WIDTH=100 HEIGHT=30 class="celdas alcalinoterreos">Alcalinoterreos
     </td>
     <td WIDTH=100 HEIGHT=30 class="celdas metales">Metales de transicion/ Bloque D
     </td>
     <td WIDTH=100 HEIGHT=50 class="celdas lantanidos">Lantanidos
     <table>
     <td WIDTH=100 HEIGHT=48 class="actinidos">Actinidos</td></table>
     </td>
     <td WIDTH=80 HEIGHT=30 class="celdas otros-metales">Otros metales
     </td>
     </td>
     <td WIDTH=150 HEIGHT=30 class="metaloides celdas">Metaloides
     </td>
     <td WIDTH=125 HEIGHT=30 class="otros-no-metales celdas">Otros no metales
     </td>
     <td WIDTH=125 HEIGHT=30 class="halogenos celdas">Halógenos
     </td>
    </table>
    
    

    </div>
   <div class="col-md-2"></div>
   </div>

   <!-- CREATED BY: Brahiam Castillo, estudiante del ITLA, MATRÍCULA: 2017-5280 -->
    
</body>
</html>