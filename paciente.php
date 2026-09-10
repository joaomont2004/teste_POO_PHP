<?php
require_once 'Logavel.php';
require_once 'telefoneinvalidoexception.php';
require_once 'nomevazioexception.php';
require_once 'cpfinvalidoexception.php';

class Paciente {
    use Logavel;

    private string $nome;
    private int $id;
    private string $cpf;
    private string $tele;
    private string $data;

    public function __construct(string $nome, int $id, string $cpf, string $tele, string $data ){
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->id = $id;
        $this->validaCPF($cpf);
        $this->cpf = $cpf;
        $this->validaTelefone($tele);
        $this->tele = $tele;
        $this->data = $data;
    }

    public function validaTelefone(string $tele) {
        if ($tele === "" || (strlen($tele) < 10 || strlen($tele) > 11)) {
            throw new telefoneinvalidoexception();
        }
    }

    public function validaNome(string $nome) {
        if (empty($nome)) {
            throw new nomevazioexception();
        }
    }
    public function validaCPF(string $cpf) {
        if (!preg_match('/^\d{11}$/', $cpf)) {
            throw new cpfinvalidoexception();
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
