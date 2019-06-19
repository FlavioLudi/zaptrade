## Requisitos

- Php 7.3
- Mysql 5.7
- Composer

## Instalação Local

- Usando um AMP na máquina
- Faça um clone do repositório
- Na pasta zaptrade execute o seguinte comando: `composer install`
- Faça uma cópia do arquivo .env.example para .env. e insira as credenciais para acesso a um novo banco de dados
- Na pasta zaptrade execute os seguintes comandos:
- `php artisan migrate`
- `php artisan db:seed`
- `php artisan key:generate`
- `php artisan serve`
- A aplicação estará disponível no endereço http://127.0.0.1:8000 em seu navegador
