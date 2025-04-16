<?php
class Sessao {
    public static function iniciar() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($chave, $valor) {
        self::iniciar();
        $_SESSION[$chave] = $valor;
    }

    public static function get($chave) {
        self::iniciar();
        return $_SESSION[$chave] ?? null;
    }

    public static function destruir() {
        self::iniciar();
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 3600, '/');
    }

    public static function setFlash($mensagem) {
        self::set('flash', $mensagem);
    }

    public static function getFlash() {
        $mensagem = self::get('flash');
        self::set('flash', null);
        return $mensagem;
    }
}