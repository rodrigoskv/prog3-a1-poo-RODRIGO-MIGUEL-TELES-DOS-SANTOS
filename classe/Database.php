<?php
class Database {
    private static $instance = null;
    private $users = [];
    private $nextId = 1;

    private function __construct() {
        $this->users[] = [
            'id' => $this->nextId++,
            'nome' => 'Teste',
            'email' => 'teste@teste.com',
            'senha' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' // senha: teste123
        ];
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getUsers() {
        return $this->users;
    }

    public function addUser($nome, $email, $senha) {
        if ($this->findUserByEmail($email)) {
            return false;
        }
        
        $this->users[] = [
            'id' => $this->nextId++,
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha
        ];
        return true;
    }

    public function findUserByEmail($email) {
        foreach ($this->users as $user) {
            if ($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }
}
?>