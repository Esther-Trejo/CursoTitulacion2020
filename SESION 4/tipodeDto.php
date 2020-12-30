<?php
/**
 * PHP Soporta los siguientes tipos de datos:
 * String
 * Integer
 * Float
 * Boolean
 * Array
 * Object
 * NULL
 * Resource
 */
    // String
    $saludo="Hola";
    echo $saludo. "Bienvenidos a " . 'PHP';
    echo"<br>";

    // Integer
    echo"<hr>";
    $x =2020;
    var_dump($x);
    echo"<br>";

    // Float
    echo"<hr>";
    $y =10.5672;
    var_dump($y);
    echo"<br>";

    // Bolean
    echo"<hr>";
    $verdadero = true;
    $falso = false;
    var_dump($verdadero);
    echo"<br>";

    // Array 
    echo"<hr>";
    $colores= array("rojo", "verde", "negro", "blanco");
    var_dump($colores);
    echo"<br>";

    // Object
    echo"<hr>";
    class carro {
        public $color;
        public $modelo;

        public function _construct($color, $modelo){
            $this->color=$color;
            $this->modelo=$modelo;
        }
        public function mensaje() {
            return "Micarro es un " . $this->modelo . "" . $this->color;
                }
            public function detenerse() {
                return "Deteniendose...";
            }
    }
    // objeto 1      
    $Micarro= new carro("rojo", "chevrolet");
    echo $Micarro->mensaje();
    echo"<br>";
    // objeto 2
    $Micarro= new carro("blanco", "toyota");
    echo $Micarro->mensaje();
    echo"<br>";


    // NULL
    echo"<hr>";
    $valor =4;
    $valor =NULL;  //  es diferente a decir  $valor = "";
    var_dump($valor);

    // Resource
    /** 
     * Recursos externos a PHP
     * BD
     * Archivos
     * Funciones
     * ETC.
    */