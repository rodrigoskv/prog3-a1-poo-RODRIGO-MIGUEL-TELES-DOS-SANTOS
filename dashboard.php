<?php
require_once 'classes/Sessao.php';
Sessao::iniciar();

$usuario = Sessao::get('usuario');

if (!$usuario) {
    header('Location: login.php');
    exit();
}

$lembrarEmail = $_COOKIE['lembrar_email'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo, <?= htmlspecialchars($usuario['nome']) ?>!</h1>
        <p>Seu e-mail: <?= htmlspecialchars($usuario['email']) ?></p>
        <?php if ($lembrarEmail): ?>
            <p>E-mail lembrado: <?= htmlspecialchars($lembrarEmail) ?></p>
        <?php endif; ?>
        <form action="logout.php" method="post">
            <button type="submit">Sair</button>
        </form>
    </div>
</body>
</html>