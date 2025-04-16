<?php
require_once 'classes/Sessao.php';
Sessao::iniciar();
$flash = Sessao::getFlash();
$lembrarEmail = $_COOKIE['lembrar_email'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if ($flash): ?>
            <div class="error"><?= htmlspecialchars($flash) ?></div>
        <?php endif; ?>
        <form action="processa_login.php" method="post">
            <div class="form-group">
                <label>E-mail:</label>
                <input type="email" name="email" value="<?= htmlspecialchars($lembrarEmail) ?>" required>
            </div>
            <div class="form-group">
                <label>Senha:</label>
                <input type="password" name="senha" required>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="lembrar" <?= $lembrarEmail ? 'checked' : '' ?>>
                    Lembrar e-mail
                </label>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
    </div>
</body>
</html>