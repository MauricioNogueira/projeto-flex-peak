<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel
Versão do PHP: 7.0.22

Primeiramente você precisa instalar o composer, se caso não tenha <a href="https://getcomposer.org/download/">clique aqui</a> para baixar.
Vamos começar!

Abra o arquivo .env e faça as configurações com o seu banco de dados, como username, password e nome do banco.

Agora coloque o projeto na pasta do seu servidor local, em seguida abra o terminal e vá para dentro do diretório do projeto;

O projeto já possui dados pré configurado para serem adicionados no banco de dados: dentro do diretório do projeto execute o comando php artisan migrate, se caso você já fez este comando e quer reiniciar a tabela novamente use o comando php artisan migrate:fresh
Em seguida, use o comando para inserir os dados pré configurado: php artisan db:seed

Em seguida execute o comando php artisan serve, abra o seu navegador e na url digite digite localhost:8000.

Pronto!
