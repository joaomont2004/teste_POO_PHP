<?php

trait Logavel {
    public function registrarLog(string $acao): void {
        echo "[LOG] " . $acao . "\n";
    }
}