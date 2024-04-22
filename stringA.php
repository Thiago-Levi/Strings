<?php
$name = "Vinícius João Dias";
$url = 'https://alura.com.br';
$myEmail = "thiago@email.com.br";


echo("Retorna true se a string está contida: ");
var_dump(str_contains($name, "Dias"));

echo("Verifica se a string começa com uma outra string: ");
var_dump(str_starts_with($url, "https"));

echo("Verifica se a string termina com uma outra string: ");
var_dump(str_ends_with($url, ".br"));

echo("Retorna uma substring: ");
//Se não informar o final, retorna toda a string.
var_dump(substr($myEmail, 0, 6));

echo("Retorna a posição da string encontrada: ");
var_dump(strpos($myEmail, "@"));

echo("Transforma em UpperCase(não modifica a orirignal)");
var_dump(strtoupper($name));

echo("Transforma em LowerCase(não modifica a orirignal)");
var_dump(strtolower($name));

echo("Retorna o tamanho/número de caracteres em uma string em bytes: ");
var_dump(strlen($name));

//Para os casos de strings que ocupam mais de um byte por caractere.

echo("mb_ -> Transforma em UpperCase(não modifica a original): ");
var_dump(mb_strtoupper($name));

echo("mb_ -> Transforma em LowerCase(não modifica a orirignal)");
var_dump(mb_strtolower($name));

echo("mb_ -> Retorna o número de caracteres em uma string: ");
var_dump(mb_strlen($name));


?>