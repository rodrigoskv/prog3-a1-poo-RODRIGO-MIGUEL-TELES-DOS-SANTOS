<?php
require_once 'classes/Sessao.php';
Sessao::iniciar();

header('Location: ' . (Sessao::get('usuario') ? 'dashboard.php' : 'login.php'));
exit();