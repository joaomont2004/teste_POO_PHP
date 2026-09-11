<?php
require_once 'paciente.php';

echo "--- Teste 1: Nome vazio ---\n";
try {
    $p = new Paciente("", 1, "12345678900", "4399011111", "01-01-2000");
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "\n";
}

echo "\n--- Teste 2: CPF inválido ---\n";
try {
    $p = new Paciente("Ana", 2, "123", "4399011111", "01-01-2000");
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "\n";
}

echo "\n--- Teste 3: Telefone inválido ---\n";
try {
    $p = new Paciente("Carlos", 3, "12345678900", "", "01-01-2000");
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "\n";
}

echo "\n--- Teste 4: Paciente válido (não deve dar erro) ---\n";
try {
    $p = new Paciente("Maria", 4, "12345678900", "4399011111", "01-01-2000");
    echo $p->exibirResumo() . "\n";
} catch (Exception $e) {
    echo "Erro inesperado: " . $e->getMessage() . "\n";
}