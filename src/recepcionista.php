<?php

namespace JooGabrielBorgesMon\TestePooPhp;

class recepcionista extends funcionario {
    private string $turno;
    private string $folga;
    
    public function __construct(string $nome, string $cpf, string $tele, string $data, string $cargo, float $salario, string $turno, string $folga) {
        parent::__construct($nome, $cpf, $tele, $data, $cargo, $salario);
        $this->turno = $turno;
        $this->folga = $folga;
    }


    public function descricao() {
        return parent::descricao() . "\n" . "TURNO: $this->turno" . "\n" . "FOLGA: $this->folga";
    }
}