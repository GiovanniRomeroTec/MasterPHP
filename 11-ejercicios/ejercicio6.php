<?php
/*
Ejercicio 6:
Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10.
*/
echo "<table border='1'><tr>";//Inicio de la tabla
echo "<tr>";//Inicio fila 1 de celdas
for($cabecera=1;$cabecera<=10;$cabecera++){
    echo "<td>Tabla del $cabecera</td>";
}
echo "</tr>";//Cierre fila 1 de celdas
echo "<tr>";//Inicio fila 2 de celdas
echo "</tr>";//Cierre fila 2 de celdas
for($i=1;$i<=10;$i++){
    echo "<td>";
    for($x=1;$x<=10;$x++){
        echo "$i x $x= ".($i*$x)."<br>";
    }
    echo "</td>";
}
echo "</table>";//fin de la tabla

?>