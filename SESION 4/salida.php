<?php
/** 
 * mostrando texto con echo o echo()
*/
echo"<h2>PHP es divertido!</h2>";
echo"hola mundo!<br>";
echo"estoy aprendiendo PHP<br>";
echo"esta ", "cadena de texto ", "fue ", "realizada ", "con multiples parametros";
echo "<br>";
/**
 * mostrando variables con echo
 */
$txt1="aprende PHP";
$txt2="UICSLP";
$x =5;
$y =4;

echo "<h2>". $txt1 . "</h2>"; #el . se utiliza para concatenar
echo "Estudia PHP en la " . $txt2 . "<br>";
echo $x +$y;

echo "<br>";
/**
 * mostrando como print o print()
 */