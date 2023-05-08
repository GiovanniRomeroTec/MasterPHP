<?php
//BUCLE WHILE
/*Estructuta de control que itera o repite la ejecución de una serie de instrucciones
tantas veces como sea necesario,en base a una condición.
while(condición){
    bloque de instrucciones
}
*/
$numero=0;
while($numero <= 99){
    echo "$numero,";
    if($numero==50){
        echo "<br>";
    }
    if($numero==99){
        $numero++;
        echo "$numero";
    }
    $numero++;
}
echo '<br>';
if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero=(int)$_GET['numero'];
}else{
    $numero=1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";
$contador=0;
while($contador<=10){
    echo "$numero x $contador= ".($numero*$contador).'<br>';
    $contador++;
}
var_dump($numero);
/*
//DO WHILE
do{

    //BLOQUE DE INSTRUCCIONES

}while()
*/
echo '<br>';
$edad=18;
$contador=1;
do{
    echo "Tienes acceso al local privado $contador<br>";
    $contador++;
}while($edad>=18&&$contador<=10);
?>