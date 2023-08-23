<?php

$calificaciones = [
    "Ana" => [
        "MAtematicas" => 3,
        "Historia" => 4,
        "Ingles" => 1
    ],
    "Juan" => [
        "MAtematicas" => 3.5,
        "Historia" => 4.2,
        "Ingles" => 1
    ],
    "Pedro" => [
        "MAtematicas" => 1,
        "Historia" => 1,
        "Ingles" => 1
    ],

];


//Count

echo "Total de notas: " .count($calificaciones,COUNT_RECURSIVE).'<br>';


$calificaciones['Ana']['Matematicas']=5;
echo "<pre>";
print_r($calificaciones);
echo"<pre>";
