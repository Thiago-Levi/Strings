<?php
$name = "Vinícius João Dias";
$url = 'https://alura.com.br';
$myEmail = "thiago@email.com.br";

echo("Retorna um array separado por separador: ");
//ex 1:
var_dump(explode(' ', $name));
//ex 2
list($firstName, $secondName) = explode(' ', $name);
echo("Primeiro nome: $firstName\nSegundo nome: $secondName")





?>