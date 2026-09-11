<?php

namespace JooGabrielBorgesMon\TestePooPhp\Exceptions;

class telefoneinvalidoexception extends pacienteexception {
    public function __construct() {
        parent::__construct("Telefone inválido. O telefone deve conter apenas números e ter 10 ou 11 dígitos.");
    }
}