
<?php
/*
//CONDICIONALES
IF:
if(condicion){
    instrucciones
}else{
    otras instrucciones
}
//OPERADORES DE COMPARACIÓN
== IGUAL
=== IDENTICO
!= DISTINTO
<> DISTINTO
!== NO IDENTICO
< MAYOR QUE
> MENOR QUE
<= MENOR O IGUAL QUE
>= MAYOR O IGUAL QUE

//OPERADORES LOGICOS
&& AND Y
|| OR O
! NOT NO
AND
OR
*/

//EJEMPLO 1
 $color="rojo";

 if($color=='rojo'){
    echo 'El color es rojo';
 }else{
    echo 'El color no es rojo';
 }
 echo '<br>';
 //EJEMPLO 2
 $year=2019;
 if($year!=2019){
    echo 'Es un año diferente a 2019';
 }else{
    echo 'Es 2019';
 }
 //EJEMPLO 3
    $nombre='David';
    $edad=33;
    $ciudad='Madrid';
    $continente="Europa";
    $mayoria_edad=18;
    if($edad>=$mayoria_edad){
        echo "<h1>$nombre es mayor de edad</h1>";
        echo "<h2>Y es de $ciudad";
        if($continente=='Europa'){
            echo "<h2> $nombre es de $continente";
        }else{
            echo "<h2> $nombre no es de $continente";
        }
    }else{
        echo "<h2>$nombre no es mayor de edad</h2>";
    }

 //EJEMPLO 4
 echo '<br>';
 $dia=3;
 if($dia==1){
    echo 'Es lunes';
 }else if($dia==2){
    echo 'Es martes';
 }else if($dia==3){
    echo 'Es miercoles';
 }else{
    echo 'Introduce un día valido';
 }

 //EJEMPLO 5
 $edad1=18;
 $edad2=64;
 $edad_oficial=20;
 if($edad_oficial>=$edad1&&$edad_oficial<=$edad2){
    echo "<br>Esta en edad de trabajar";
 }else{
    echo 'No esta en edad de trabajar';
 }

 $pais='Mexico';
 if($pais=='Mexico'||$pais=='España')
 {
    echo "<br>En este pais se habla español<br>";
 }else{
    echo "En este país no se habla español <br>";
 }

 //SWITCH
 $dia=4;
 switch($dia){
    case 1:
        echo 'lunes';
        break;
    case 2:
        echo 'martes';
        break;
    case 3:
        echo 'miercoles';
        break;
    case 4:
        echo 'jueves';
        break;
    case 5:
        echo 'viernes';
        break;
    default:
    echo 'Es fin de semana';
 }

 //GOTO
 goto marca;
 echo "<h3>Instruccion 1</h3>";
 echo "<h3>Instruccion 2</h3>";
 echo "<h3>Instruccion 3</h3>";
 echo "<h3>Instruccion 4</h3>";

 marca:
 echo"<br>me he saltado 4 echos";
?>