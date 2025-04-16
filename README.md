# Sistema de Autenticação em PHP

**Nome do Aluno:** Rodrigo Miguel Teles dos Santos  
**Turma:** 5ª fase - São Miguel do Oeste  

---

## 📋 Descrição do Projeto
Sistema de autenticação de usuários desenvolvido em PHP puro seguindo os princípios de Orientação a Objetos (POO).  
Permite:  
- Cadastro de novos usuários (nome, e-mail e senha)  
- Login com validação de credenciais  
- Dashboard personalizado  
- Persistência de sessão  
- Armazenamento de e-mail em cookies  
- Logout seguro  

---

## 🛠️ Funcionalidades Principais
- **Cadastro:** Validação e sanitização de dados, armazenamento seguro de senhas com `password_hash()`  
- **Login:** Verificação de credenciais usando `password_verify()`, cookies para "lembrar e-mail"  
- **Dashboard:** Exibição de dados do usuário e e-mail salvo em cookie  
- **Sessões:** Gerenciamento seguro com métodos estáticos  
- **Responsivo:** Layout estilizado com CSS  

---

## ⚙️ Pré-requisitos
- PHP 8.0 ou superior  
- Servidor web (Apache, Nginx ou PHP Built-in Server)  
- Navegador moderno  

---

## 🚀 Como Executar Localmente

### Passo 1: Clonar o repositório
```bash
git clone https://github.com/seu-usuario/sistema-autenticacao-php.git
cd sistema-autenticacao-php
```

### Passo 2: Iniciar o servidor PHP
```bash
php -S localhost:8000
```

### Passo 3: Acessar no navegador
```
http://localhost:8000
```

### Passo 4: Testar o sistema
1. Acesse `/cadastro.php` para criar uma conta  
2. Faça login em `/login.php`  
3. Acesse a área restrita em `/dashboard.php`  

---

## 📂 Estrutura de Arquivos
```
/
├── classes/
│   ├── Usuario.php
│   ├── Sessao.php
│   └── Autenticador.php
├── cadastro.php
├── login.php
├── dashboard.php
├── index.php
├── logout.php
├── processa_cadastro.php
├── processa_login.php
└── style.css
```


## ⚠️ Notas Importantes
- O sistema **não utiliza banco de dados** - os dados são armazenados em sessão durante a execução  
- Para persistência permanente, seria necessário implementar um sistema de armazenamento  
- Verifique se as permissões de arquivo estão configuradas corretamente no servidor  
- Testado no PHP 8.2 com servidor embutido  

🔐 Desenvolvido para fins educacionais - 2025
