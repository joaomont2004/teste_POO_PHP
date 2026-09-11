<?php

namespace JooGabrielBorgesMon\TestePooPhp;

use JooGabrielBorgesMon\TestePooPhp\Exceptions\TelefoneInvalidoException;
use JooGabrielBorgesMon\TestePooPhp\Exceptions\NomeVazioException;
use JooGabrielBorgesMon\TestePooPhp\Exceptions\CpfInvalidoException;

class Paciente {
    use Logavel;

    private string $nome;
    private int $id;
    private string $cpf;
    private string $tele;
    private string $data;

    public function __construct(string $nome, int $id, string $cpf, string $tele, string $data) {
        $this->validaNome($nome);
        $this->validaCPF($cpf);
        $this->nome = $nome;
        $this->id = $id;
        $this->cpf = $cpf;
        $this->validaTelefone($tele);
        $this->tele = $tele;
        $this->data = $data;
    }

    public function validaTelefone(string $tele) {
        if ($tele === "" || (strlen($tele) < 10 || strlen($tele) > 11)) {
            throw new TelefoneInvalidoException();
        }
    }


    public function getNome(): string {
    return $this->nome;
    }

    public function getTelefone(): string {
    return $this->tele;
    }

    private function validaNome(string $nome) {
        if (empty($nome)) {
            throw new NomeVazioException();
        }
    }

    public function validaCPF(string $cpf) {
        if (!preg_match('/^\d{11}$/', $cpf)) {
            throw new CpfInvalidoException();
        }
    }

    public function atualizarTelefone(string $tele) {
        $oldtele = $this->tele;
        $this->validaTelefone($tele);
        $this->tele = $tele;
        $this->registrarLog("Telefone atualizado de $oldtele para $tele.");
    }

    public function exibirResumo() {
        return "NOME: $this->nome"."\n"."ID: $this->id"."\n"."CPF: $this->cpf"."\n"."TELEFONE: $this->tele"."\n"."DATA: $this->data";
    }
}