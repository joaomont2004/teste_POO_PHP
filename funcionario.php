<?php

require_once 'pessoa.php';

class Funcionario extends pessoa {
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, string $cpf, string $tele, string $data, string $cargo, float $salario) {
        parent::__construct($nome, $cpf, $tele, $data);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }


    public function descricao() {
        return parent::descricao() . "\n" . "CARGO: $this->cargo" . "\n" . "SALARIO: $this->salario";
    }
}