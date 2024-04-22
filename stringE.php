<?php

$texto = 'Quero comer Pizza hoje!';

//Replace não modifica o array original
//Ex 1:
echo(str_replace("Pizza", "Hamburguer", $texto) . PHP_EOL);
//Ex 2:
echo(str_replace(["comer", "Pizza"], ["beber", "Vinho"], $texto) . PHP_EOL);
echo($texto);


?>