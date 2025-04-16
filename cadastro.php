<?php
require_once 'classes/Sessao.php';
Sessao::iniciar();
$flash = Sessao::getFlash();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <?php if ($flash): ?>
            <div class="error"><?= htmlspecialchars($flash) ?></div>
        <?php endif; ?>
        <form action="processa_cadastro.php" method="post">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" required>
            </div>
            <div class="form-group">
                <label>E-mail:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Senha:</label>
                <input type="password" name="senha" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
    </div>
</body>
</html>