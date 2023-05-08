<?php
/*
FUNCIONES:
Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto
y que pueden reutilizarse solamente invocando a la función tantas veces como queramos.
function nombreDeMiFuncion($parametro){
    //Bloque de instrucciones   
}

//Para invocar a la función
nombreDeMiFuncion($parametro);
*/
//Ejemplo 1
function muestraNombres(){
    echo "Giovanni <br/>";
    echo "Juan<br/>";
}
//INvocar función
muestraNombres();
muestraNombres();
muestraNombres();
//Ejemplon 2
function tabla($numero){
    echo "<h3>Tabla de multiplicar del número:$numero</h3>";
    for($i=1;$i<=10;$i++){
        $operacion=$numero*$i;
        echo "$numero x $i = $operacion<br/>";
    }
}
/*
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay número para sacar la tabla";
}
for($i=0;$i<=10;$i++){
    tabla($i);
}*/
//Ejemplo 3
function calculadora($numero1,$numero2,$negrita=false){
    //Conjunto de instrucciones a ejecutar
    $cadenaTexto="";
    if($negrita!=false){
        $cadenaTexto.="<h1>";
    }
    $cadenaTexto.="Suma:$numero1+$numero2=".($numero1+$numero2)."<br/>";
    $cadenaTexto.="Resta:$numero1-$numero2=".($numero1-$numero2)."<br/>";
    $cadenaTexto.="Multiplicación:$numero1*$numero2=".($numero1*$numero2)."<br/>";
    $cadenaTexto.="División:$numero1/$numero2=".($numero1/$numero2)."<br/>";
    if($negrita!=false){
        $cadenaTexto.="</h1>";
    }
    return $cadenaTexto;
}
echo calculadora(10,30,true);
echo calculadora(10,30,false);
//Ejemplo 4
function getNombre($nombre){
    $texto="<br/>El nombre es:$nombre";
    return $texto;
}
function getApellidos($apellidos){
    $texto="Los apellidos son:$apellidos";
    return $texto;
}
function devuelveElNombre($nombre,$apellidos){
    $texto=getNombre($nombre)."<br/>".
    getApellidos($apellidos);
    return $texto;
}
 echo devuelveElNombre('Giovanni','Romero Arcediano');
 echo getNombre('Giovanni');
?>