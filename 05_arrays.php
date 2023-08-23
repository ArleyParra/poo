<?php


//Inicializar array

$nombres = ["Arley" , "Jaun" , "Ana"];
echo "<pre>";
print_r($nombres);
echo "</pre>";

//agregegar items

$nombe[] = "Pedro";

//Mostrar total elementos

echo "El numero total de nombres es: " . count($nombres) . '<br>';

//Accede por los indices
echo 'El nombe indice 2 es: ' . $nombres[2].'<br>';
echo 'El ultimo nombe ' . end($nombres). '<br>';

//Ordenar alfaveticamente

sort($nombres);
echo "<pre";
print_r($nombres);
echo "</pre>";

//Eliminar ultimo elelmento

array_pop($nombres);
echo "<pre";
print_r($nombres);
echo "</pre>";

//Eliminar por indices

unset($nombres[1]);
echo "<pre";
print_r($nombres);
echo "</pre>";

?>