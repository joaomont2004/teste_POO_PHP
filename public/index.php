<?php 

require '../vendor/autoload.php';
use JooGabrielBorgesMon\TestePooPhp\paciente;


$paciente = new Paciente("João", 1, "12345678900", "4399011111", "10-05-1990");

echo "Paciente cadastrado\n";
echo "Nome: " . $paciente->getNome() . "\n";
echo "Telefone: " . $paciente->getTelefone() . "\n";