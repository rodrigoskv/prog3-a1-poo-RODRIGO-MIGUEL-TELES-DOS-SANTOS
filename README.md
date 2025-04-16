# Sistema de Login PHP

**Aluno:** Rodrigo Miguel Teles dos Santos  
**Turma:** 5ª fase - São Miguel do Oeste  

---

## 📌 Sobre
Sistema básico de cadastro e login em PHP com:
- **Cadastro:** Validação e sanitização de dados, armazenamento seguro de senhas com `password_hash()`  
- **Login:** Verificação de credenciais usando `password_verify()`, cookies para "lembrar e-mail"  
- **Dashboard:** Exibição de dados do usuário e e-mail salvo em cookie  
- **Sessões:** Gerenciamento seguro com métodos estáticos  
- **Responsivo:** Layout estilizado com CSS  

---

## ▶️ Como Usar

1. Inicie o servidor PHP:
```bash
php -S localhost:8000
```

2. Acesse no navegador:
```
http://localhost:8000
```

3. Fluxo:
- Cadastre-se em `/cadastro.php`
- Faça login em `/login.php`
- Acesse a área restrita em `/dashboard.php`

---


## 📂 Arquivos Principais
```
/classes/       # Classes do sistema
/cadastro.php   # Página de cadastro
/login.php      # Página de login
/dashboard.php  # Área logada
```
