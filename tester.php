<?php

require_once 'pessoa.php';
require_once 'funcionario.php';
require_once 'dentista.php';
require_once 'recepcionista.php';

$p1 = new pessoa("Joao", "09016514945", "4399028582", "06-10-2004");
$f1 = new funcionario("Maria", "12345678900", "4399028583", "01-01-1990", "Gerente", 5000.00);
$d1 = new dentista("Carlos", "98765432100", "4399028584", "15-05-1985", "Dentista", 7000.00, 12345, "Ortodontia");
$r1 = new recepcionista("Ana", "56789012345", "4399028584", "20-08-1992", "Recepcionista", 3000.00, "Manhã", "Sábado");

echo $p1->descricao() . "\n\n";
echo $f1->descricao() . "\n\n";
echo $d1->descricao() . "\n\n";
echo $r1->descricao() . "\n\n";