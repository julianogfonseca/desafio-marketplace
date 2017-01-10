# desafio-marketplace
Desafio de plataformas: Marketplace utilizando o checkout Pagar.me.

#Ferramentas necessárias
Para a execução desse projeto é necessário a instalação das seguintes ferramentas:

* PHP >= 5.6.4
* Laravel 5.3: https://laravel.com/docs/5.3/installation
* SQLite (mudar a versão do PHP de acordo com a sua instalação): https://www.dev-metal.com/how-to-install-sqlite-driver-for-php-in-ubuntu-debian/

#Instruções de execução

* Passo 1: clonar o projeto para seu diretório;
* Passo 2: entrar na pasta do projeto via terminal e executar o comando **php artisan serve**;
* Passo 3: acessar seu localhost (http://localhost:8000/) e depois a página de checkout (http://localhost:8000/purchase);
* Passo 4: clicar no botão *checkout*, escolher a forma de pagamento, inserir seus dados e concluir a compra;
* Para executar testes: executar dentro da pasta do projeto o comando **vendor/bin/phpunit**.

#Localização dos arquivos

* Models: diretório App;
* Controllers: diretório App\Http\Controllers;
* Views: diretório Resources\Views\pages;

