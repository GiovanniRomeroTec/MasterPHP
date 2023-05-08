<?php
/*
Variables locales:
Son las que se definen dentro de una función y no pueden ser
usadas fuera de la función,solo estan disponibles dentro.A no ser
que hagamos un return.
Variables globales:
Son las que se declaran fuera de una y estan disponibles dentro y fuera de las funciones.*/
$frase="Ni los genios son tan genios,ni los mediocres tan mediocres";
echo $frase;
function holaMundo(){
    global $frase;
    echo"<h1>$frase</h1>";
    $year=2019;
    echo"<h1>$year</h1";
    return $year;
}
holaMundo();
//Funciones variables
function buenosDias(){
    return "<br><h1>Hola! Buenos dias :)</h1>";
}
function buenasTardes(){
    return "<br><h1>Hola! Buenas tardes :)</h1>";
}
function buenasNoches(){
    return "<br/><h1>Hola! Buenas Noches:)</h1>";
}
$horario=$_GET['buenas'];
echo $horario();
?>
