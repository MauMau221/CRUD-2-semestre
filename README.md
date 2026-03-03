# Bravo Ticket — Sistema de Gestão de Ingressos

Sistema web em PHP para gestão de ingressos, produtos (eventos), categorias e administradores. Desenvolvido como projeto de portfólio, com CRUD completo, autenticação e painel administrativo.

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8-4479A1?logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap)

## Funcionalidades

- **Autenticação:** login por sessão PHP com senhas em hash (bcrypt via `password_hash`/`password_verify`).
- **Dashboard:** visão geral com totais de produtos, administradores e categorias.
- **Produtos (eventos):** cadastro, edição, listagem e exclusão lógica; vínculo com categoria, estoque e imagens.
- **Categorias:** CRUD completo (ex.: Shows, Teatro, Festivais, Esportes).
- **Administradores:** CRUD com ativo/inativo e e-mail.
- **Layout responsivo:** tema Argon Dashboard (Bootstrap) com sidebar e notificações.

## Requisitos

- PHP 7.4+ (recomendado 8.x)
- MySQL 5.7+ ou MariaDB
- Servidor web (Apache/XAMPP) com suporte a PHP

## Instalação

1. **Clone**
   ```bash
   git clone https://github.com/seu-usuario/crud_ingresso.git
   cd crud_ingresso
   ```

2. **Banco de dados**
   - Crie um banco MySQL (ex.: `ingresso`) e importe `BANCO.sql`.

3. **Configuração**
   - Opcional: copie `CRUD/config.example.php` para `CRUD/config.php` e ajuste host, banco, usuário e senha. Se não existir `config.php`, o sistema usa os valores em `CRUD/conexao.php`.

4. **Acesso**
   - Abra no navegador a pasta do projeto (ex.: `http://localhost/crud_ingresso/login/`). Os dados de exemplo do banco usam a senha **senha123** (ex.: login **Ana Silva**).

## Estrutura do projeto

```
crud_ingresso/
├── BANCO.sql
├── CRUD/
│   ├── config.php         # Não versionado (copiar de config.example.php)
│   ├── config.example.php
│   ├── conexao.php
│   ├── processa_login.php
│   ├── logout.php
│   ├── valida_login.php
│   ├── assets/
│   ├── layouts/
│   └── pages/
└── login/
    ├── index.php
    └── style.css
```

## Tecnologias

- **Back-end:** PHP 7.4+ (PDO, sessão, `password_hash`/`password_verify`)
- **Banco de dados:** MySQL (ADMINISTRADOR, CATEGORIA, PRODUTO, PRODUTO_ESTOQUE, PRODUTO_IMAGEM)
- **Front-end:** HTML5, Bootstrap 5 (login), Argon Dashboard (painel)
- **Segurança:** Sessão PHP, prepared statements, senhas em bcrypt

## Credenciais de demonstração

O `BANCO.sql` já inclui usuários de exemplo. Senha padrão: **senha123**.

| Nome        | Senha    |
|-------------|----------|
| Ana Silva   | senha123 |
| Bruno Costa | senha123 |

## Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para detalhes.
