<?php
class Usuario {
    private $nome;
    private $email;
    private $senhaHash;

    public function __construct($nome, $email, $senha) {
        $this->nome = trim($nome);
        $this->email = strtolower(trim($email));
        $this->senhaHash = password_hash(trim($senha), PASSWORD_DEFAULT);

        if ($this->senhaHash === false) {
            throw new Exception('Falha ao gerar hash da senha');
        }
    }

    public function autenticarSenha($senha) {
        return password_verify(trim($senha), $this->senhaHash);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }
}