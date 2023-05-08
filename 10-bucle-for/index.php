<?php
//FOR
/*
FOR(variable contador,condición,actualización contador){
    Bloque de instrucciones
}
*/
$resultado=5;
for($i=0;$i<=100;$i++){
    $resultado*=$i;
    echo "$resultado<br>";
}

echo "<h1>El resultado es:$resultado</h1>";

//Ejemplo tabla multiplicar
if(isset($_GET['numero'])){
    //cambiar tipo de dato
    $numero=(int)$_GET['numero'];
}else{
    $numero=1;
}
echo "<h1>Tabla de multiplicar del número $numero</h1>";
for($i=1;$i<=10;$i++){
    echo "$numero x $i =".($numero*i)."<br/>";
}

//Ejemplo break
for($i=1;$i<=10;$i++){
    if($numero==45){
        echo "No se pueden mostrar estas operaciones prohibidas";
        break;
    }
    echo "$numero x $i =".($numero*i)."<br/>";
}
?>