<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre a API Eótica

A API Eótica se trata de um code challenge para vaga de Desenvolvedor Backend PHP na empresa Eótica. A ideia é implementar 
um CRUD de produtos. Com base nisso, o desenvolvimento desse projeto será feito utilizando o framework Laravel para criar uma 
API Rest. Logo a baixo a seguir é mostrado o passo a passo para execução do projeto. 

## Requisitos para execução do projeto

- **[Docker](https://www.docker.com/)**
- **[Postman](https://www.postman.com/)**
- **[PhpStorm](https://www.jetbrains.com/pt-br/phpstorm/)**

## Baixando o Projeto API Eótica

### Clone o projeto em seu localhost
`git clone https://github.com/pedroleandro/api_eotica.git`

### Acesse a pasta do projeto
`cd api_eotica/`

# Projeto API Eótica no Docker

## Com DockerFile e docker-compose.yml

### Compilando a imagem do app
`docker-compose build app`

### Subindo os containers
`docker-compose up -d`

### Copiando arquivo env
`docker-compose exec app cp .env.example .env`

### Baixando dependências
`docker-compose exec app composer install`

### Gerando chave com artisan
`docker-compose exec app php artisan key:generate`

### Executando migrations e seeders
`docker-compose exec app php artisan migrate:fresh --seed`

### Domain
`http://localhost:8010`

### Routes
Rotas
- POST /products
- GET /product/{id}
- GET /products
- PUT /product/{id}
  DELETE /product/{id}

A Collection da API com as rotas está na raiz do projeto para ser importada no Postman. 
As rotas foram protegidas com autenticação JWT, para acessa-las é preciso realizar login
e configurar o token gerado na variavel de ambiente token da collection. 

Utilize as seguintes credenciais de acesso em json para realizar login e logout:

#### email: admin@example.com
#### password: admin123

- POST /login
- POST /logout

## Agora é só testar as rotas no Postman

## Com Laradock

### Baixando Laradock
`git clone https://github.com/Laradock/laradock.git`

### Acesse a pasta do Laradock
`cd laradock/`

### Copiando arquivo env
`cp .env.example .env`

### Subindo os containers
`docker-compose up -d nginx mysql phpmyadmin`

### Acesso pasta do projeto via docker
`docker-compose exec --user=laradock workspace bash`

### Copiando arquivo env
`cp .env.example .env`

### Baixando dependências
`composer install`

### Gerando chave com artisan
`php artisan key:generate`

### Domain
`http://localhost:8010`

### PhpMyAdmin
`http://localhost:8081`

#### Credenciais de acesso para o PhpMyAdmin
#### Servidor: mysql
#### Utilizador: admin
#### Palavra-passe: admin

#### Crie o banco de dados com o nome api_eotica com charset utf8mb4 e collation utf8mb4_unicode_ci

### Executando migrations e seeders
`php artisan migrate:fresh --seed`

## Agora é só testar as rotas no Postman
