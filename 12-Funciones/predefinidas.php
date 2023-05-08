<?php
//Debuggear
$nombre="Giovanni Romero";
var_dump($nombre);

//Fechas
echo date('d-m-Y')."<br/>";
echo time()."<br/>";

//Matemáticas
echo "Raiz cuadrada de 10: ".sqrt(10)."<br/>";
echo "Numero aleatorio entre 10 y 40: ".rand(10,40)."<br>";
echo "Numero pi: ".pi()."<br/>";
echo "Redondear: ".round(7.891234,2);
//Más funciones generales
echo gettype($nombre);
//Detectar tipado
if(is_string($nombre)){
    echo "<br/>Esa variable es un string";
}

if(!is_float($nombre)){
    echo "<br/>La variable no es un numero con decimales";
}

//Comprobar si existe una variable
if(isset($nombre)){
    echo "<br/>La variable existe";
}else{
    echo "<br/>La variable no existe";
}


//Limpiar espacios
$frase="         mi contenido    ";
var_dump(trim($frase));

//Eliminar variables / indices

$year=2020;



?>

