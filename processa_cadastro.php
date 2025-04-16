<?php
require_once 'classes/Sessao.php';
require_once 'classes/Usuario.php';
require_once 'classes/Autenticador.php';

Sessao::iniciar();

$nome = htmlspecialchars($_POST['nome'] ?? '', ENT_QUOTES, 'UTF-8');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$senha = $_POST['senha'] ?? '';

if (empty($nome) || empty($email) || empty($senha)) {
    Sessao::setFlash('Preencha todos os campos');
    header('Location: cadastro.php');
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    Sessao::setFlash('E-mail inválido');
    header('Location: cadastro.php');
    exit();
}

if (Autenticador::emailExiste($email)) {
    Sessao::setFlash('E-mail já cadastrado');
    header('Location: cadastro.php');
    exit();
}

try {
    $usuario = new Usuario($nome, $email, $senha);
    Autenticador::registrarUsuario($usuario);
    header('Location: login.php');
    exit();
} catch (Exception $e) {
    Sessao::setFlash('Erro ao criar usuário');
    header('Location: cadastro.php');
    exit();
}