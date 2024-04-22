<?php

$telefones = ['85 - 998678221', '99 - 98765423', '17 - 89876543'];
$myName = ',.Thiago levi.,';

echo("Une os elementos de um array em uma string com separador");
echo(implode(PHP_EOL, $telefones));


echo( PHP_EOL ."Remove espaços e caracteres especiais(ver documentação) das extremidades da string: " . PHP_EOL);
echo(trim($myName, '.,') . PHP_EOL);
echo(ltrim($myName, '.,') . PHP_EOL);
echo(rtrim($myName, '.,') . PHP_EOL);
?>