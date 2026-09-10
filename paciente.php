<?php
require_once 'Logavel.php';


class Paciente {
    use Logavel;

    private string $nome;
    private int $id;
    private string $cpf;
    private string $tele;
    private string $data;

    public function __construct(string $nome, int $id, string $cpf, string $tele, string $data ){
        $this->nome = $nome;
        $this->id = $id;
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
        $oldtele = $this->tele;
        $this->validaTelefone($tele);
        $this->tele = $tele;
        $this->registrarLog("Telefone atualizado de $oldtele para $tele.");
    }

    public function exibirResumo() {
        return "NOME: $this->nome"."\n". "ID: $this->id". "\n"."CPF: $this->cpf" ."\n"."TELEFONE: $this->tele". "\n"."DATA: $this->data";
    }
}

    $p1 = new Paciente("Joao", 6, "09016514945", "4399028582", "06-10-2004");
    $p1->atualizarTelefone("4399028582");
    echo $p1->exibirResumo();
