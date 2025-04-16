<?php
require_once 'classes/Sessao.php';
require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';

Sessao::iniciar();

$email = strtolower(trim($_POST['email'] ?? ''));
$senha = trim($_POST['senha'] ?? '');
$lembrar = isset($_POST['lembrar']);

if (empty($email) || empty($senha)) {
    Sessao::setFlash('Preencha todos os campos');
    header('Location: login.php');
    exit();
}

$usuario = Autenticador::autenticar($email, $senha);

if ($usuario instanceof Usuario) {
    Sessao::set('usuario', [
        'nome' => $usuario->getNome(),
        'email' => $usuario->getEmail()
    ]);

    if ($lembrar) {
        setcookie('lembrar_email', $email, time() + (30 * 24 * 3600), '/');
    } else {
        setcookie('lembrar_email', '', time() - 3600, '/');
    }

    header('Location: dashboard.php');
    exit();
} else {
    Sessao::setFlash('E-mail ou senha incorretos');
    header('Location: login.php');
    exit();
}