<?php
class Autenticador {
    public static function registrarUsuario(Usuario $usuario) {
        $usuarios = Sessao::get('usuarios') ?? [];
        $usuarios[] = $usuario;
        Sessao::set('usuarios', $usuarios);
    }

    public static function autenticar($email, $senha) {
        $usuarios = Sessao::get('usuarios') ?? [];
        $email = strtolower(trim($email));

        foreach ($usuarios as $usuario) {
            if ($usuario instanceof Usuario &&
                $usuario->getEmail() === $email &&
                $usuario->autenticarSenha($senha)) {
                return $usuario;
            }
        }
        return false;
    }

    public static function emailExiste($email) {
        $email = strtolower(trim($email));
        $usuarios = Sessao::get('usuarios') ?? [];

        foreach ($usuarios as $usuario) {
            if ($usuario instanceof Usuario && $usuario->getEmail() === $email) {
                return true;
            }
        }
        return false;
    }
}