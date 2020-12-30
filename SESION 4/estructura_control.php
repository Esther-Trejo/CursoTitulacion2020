<?php
/**
 * Estructura Switch case
 */
$estacion = "";

switch($estacion) {
    case 'primavera':
        echo "bienvenidos a la primavera";
        break;
    case 'invierno':
        echo "Hace frio";
        break;

    default:
        echo "En que estacion estamos??";
        break;

}
    
    /**
     * Estructura while
     */
    $x= 1;
     while ($x <=5) { 
         echo "el numero es: $x <br>";// Codigo a ejecutar
         $x++; // incremento de la variable condicionada
     }
     echo "<br>";
     /**
      * Estructura do while
      */
      $y =1;
      do {
          echo "el numero es: $y <br>";
          $y++;
      } while ($y <= 10);