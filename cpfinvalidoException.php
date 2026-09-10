<?php
require_once 'pacienteexception.php';

class cpfinvalidoexception extends pacienteexception {
    public function __construct() {
        parent::__construct("CPF inválido. O CPF deve conter apenas números e ter 11 dígitos.");
    }
}