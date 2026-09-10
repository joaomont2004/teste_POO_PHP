<?php

require_once 'pacienteexception.php';

class nomevazioexception extends pacienteexception {
    public function __construct() {
        parent::__construct("Nome inválido. O nome não pode estar vazio.");
    }   
}