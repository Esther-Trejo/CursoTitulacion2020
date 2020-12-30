<?php
#Declaracion de variables 
$txt= "Hola a todos";
    /* los nombres de variables empiezan con el signo de $
        los nombres de las variables debeb empezar con una letra  o _
        No pueden con un numero y solo pueden contener caracteres
        alfanumericos
        Los nombres de variables son sencibles a mayusculas y minusculas
    */
    $x =5;
    $y =10.5;
    echo $txt;
    echo "<br>";
    echo $x;
    echo"<br>";
    echo $y;
    echo"<br>";

    $a =5;
    $b =3;
    
    echo "la suma de:  " , ($a + $b);

    #alcance de las variables 
 $c =5; // variable global

 fuction pruebaGlobal(){
     //utilizar c dentro de esta funcion marcara error.
     echo "<p>variable c dentro de la funcion es: $c</p>";
    }

    pruebaGlobal();

    echo "Variable c fuera de la funcion es: $c</p>"
