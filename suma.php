<?php
function sumarnumeropositivo($numero){
    if ($numero <= 0) {
        echo "error:el numero tiene que ser positivo y mayor a cero .\n";
        return;
    }

    $suma=0;
    for ($i =1; $i <= $numero; $i++){
        $suma += $i;
    }
    return $suma;
}
//pedir al usuario que ingrse un numero
$numerousuario =readline("ingrese un numero positivo");

//convertir el input del usuario a un numero entero
$numerousuario =intval($numerousuario);

//calcular la suma si el numero es positvio
$sumatotal=sumarnumeropositivo($numerousuario);

//imprimir el resultado si es correcto
if($sumatotal !== null) {
echo "la suma de todos los enteros desde 1 hasta $numerousuario es la: $sumatotal\n";

}
?> 