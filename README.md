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

### Acessando container
`docker exec -it api_eotica_app_1 bash`

### Copiando arquivo env
`cp .env.example .env`

### Baixando dependências
`composer install`

### Gerando chave com artisan
`php artisan key:generate`

### Executando migrations e seeders
`php artisan migrate:fresh --seed`

### Domain
`http://localhost:5000`

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

### Para testar a rota post/graphql
`http://localhost:5000/graphql-playground`

### Query para listar produtos
```json
{
products{
    id
    name
    description
    brand
    category
    price
    color
    created_at
    updated_at
  }
}
```

#Mutation para adicionar produto
```json
mutation {
    createProduct(
    name: "LEMA21 JULY"
    description: "Óculos de Grau Lema21 July - Dourado - C1/54"
    brand: "Lema21"
    category: "Óculos de Grau"
    price: "100"
    color: "Dourado"
    ) {
    id
    name
    description
    brand
    category
    price
    color
    }
}
```
