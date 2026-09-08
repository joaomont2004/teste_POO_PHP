<?php

class pessoa {

    private string $nome;
    private string $cpf;
    private string $tele;
    private string $data;

    public function __construct(string $nome, string $cpf, string $tele, string $data ){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->validaTelefone($tele);
        $this->tele = $tele;
        $this->data = $data;
    }

    public function validaTelefone(string $tele) {
        if ($tele === "" || (strlen($tele) < 10 || strlen($tele) > 11)) {
            throw new Exception("Telefone inválido. Deve ter entre 10 e 11 dígitos.");
        }
    }

    public function atualizarTelefone(string $tele) {
        $this->validaTelefone($tele);
        $this->tele = $tele;
    }

    public function descricao() {
        return "NOME: $this->nome"."\n"."TELEFONE: $this->tele";
    }
}