<?php

require_once 'funcionario.php';

class dentista extends funcionario {
    private int $cro;
    private string $especialidade;

    public function __construct(string $nome, string $cpf, string $tele, string $data, string $cargo, float $salario, int $cro, string $especialidade) {
        parent::__construct($nome, $cpf, $tele, $data, $cargo, $salario);
        $this->cro = $cro;
        $this->especialidade = $especialidade;
    }


    public function descricao() {
        return parent::descricao() . "\n" . "CRO: $this->cro" . "\n" . "ESPECIALIDADE: $this->especialidade";
    }
}