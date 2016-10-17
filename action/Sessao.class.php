<?php

class Sessao {


    public static function set($nome, $valor) {
        $_SESSION[$nome] = $valor;
    }

    public static function get($nome) {
        return (isset($_SESSION[$nome])) ? $_SESSION[$nome] : null;
    }

    public static function clear($nome) {
        unset($_SESSION[$nome]);
    }

    public static function clearAll() {
        unset($_SESSION);
        session_destroy();
    }

}
