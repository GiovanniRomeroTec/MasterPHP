<?php

/*
TIPOS DE DATOS:
Entero(int/integer) = 99
Coma flotante / decimales (float/double) = 3.45
Cadenas (string) = 'Hola yo soy un string'
Booleano (bool) = 1/0 true/false 
null
Array (Coleccion de datos)
Objetos
*/
$numero = 100;
echo gettype($numero).'<br>';
$decimal=27.9;
echo gettype($decimal).'<br>';
$texto='Soy un texto';
echo gettype($texto).'<br>';
$verdadero=true;
echo gettype($verdadero).'<br>';
$nula=null;
echo gettype($nula);

//Debuggear
$mi_nombre[]='Giovanni Romero Arcediano';
var_dump($mi_nombre);
?>