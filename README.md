# Alquiderna (Laravel)

Projeto de e-commerce fictício de temática medieval, desenvolvido durante o 3º semestre da faculdade no curso de Tecnólogo em Sistemas para Internet. O projeto oferece venda simulada de itens medievais, incluindo armaduras, armas físicas e outros acessórios com aspectos de jogo RPG. Cada produto conta com descrição detalhada, atributos, categorias e classes de item relacionadas.

## 🚀 Como Executar o Projeto Localmente

1. Clone o repositório: ```git clone https://github.com/marcospedroweb/tsi-alquiderna-pi3.git```
2. Instale as dependências com o Composer:
   ```composer install```
3. Copie o arquivo .env.example para .env e configure suas credenciais de banco de dados e outras variáveis de ambiente.
4. Gere a chave da aplicação:
   ```php artisan key:generate```
5. Execute as migrations (e seeders se necessário):
   ```php artisan migrate```
6. Inicie o servidor local:
   ```php artisan serve```
7. Acesse a aplicação no navegador: http://localhost:8000

## 📚 Funcionalidades

- Cadastro e gerenciamento de produtos com descrições detalhadas, atributos e classes.
- Sistema de categorias para organizar os produtos.
- Sistema de busca e filtro de itens.
- Página de detalhes de produtos.
- Layout responsivo com Bootstrap.

## 🛠️ Tecnologias Utilizadas

- Laravel (PHP)
- MySQL/MariaDB
- HTML, CSS, Javascript
- Bootstrap

---

Projeto desenvolvido por Marcos Pedro, de 23/03/2022 a 09/06/2022, como trabalho semestral para aprendizado de Laravel e desenvolvimento de e-commerce fictício.
