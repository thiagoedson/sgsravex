# SGS

[![License: MIT](https://img.shields.io/badge/license-MIT-blue.svg)](license.txt)
[![Node.js](https://img.shields.io/badge/node-%3E%3D18-339933?logo=node.js&logoColor=white)](https://nodejs.org/)
[![PHP](https://img.shields.io/badge/php-%3E%3D5.6-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Grunt](https://img.shields.io/badge/build-grunt-fbaf4a?logo=grunt&logoColor=white)](https://gruntjs.com/)
[![jQuery](https://img.shields.io/badge/jQuery-%3E%3D1.7-0769AD?logo=jquery&logoColor=white)](https://jquery.com/)
[![Docker](https://img.shields.io/badge/docker-ready-2496ED?logo=docker&logoColor=white)](Dockerfile)
[![npm audit](https://img.shields.io/badge/npm%20audit-0%20vulnerabilities-brightgreen?logo=npm)](package.json)

Este repositório contém a biblioteca **FlipClock.js** e exemplos de uso para exibir contadores e relógios no navegador, além de pequenos scripts PHP que demonstram como integrar a biblioteca com um banco SQLite para listar aniversariantes.

## Índice

- [Objetivo](#objetivo)
- [Funcionalidades Principais](#funcionalidades-principais)
- [Requisitos](#requisitos)
- [Instalação](#instalação)
  - [Dependências Node/npm](#dependências-nodenpm)
  - [Configuração do PHP](#configuração-do-php)
- [Como Executar a Aplicação](#como-executar-a-aplicação)
- [Usando o Grunt](#usando-o-grunt)
- [Executando com Docker](#executando-com-docker)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Licença](#licença)

## Objetivo

Fornecer modelos prontos de contagem regressiva e contadores progressivos que podem ser usados em projetos web. Os exemplos mostram diferentes configurações de relógio e integração com um banco de dados para listar aniversários e outros eventos.

## Funcionalidades Principais

- Relógios em formato de 12h ou 24h
- Contagem regressiva e contadores incrementais
- Exemplos de uso da biblioteca com jQuery
- Scripts PHP (com PDO/SQLite) para servir dados a partir de `bd_web.sqlite`

## Requisitos

- [Node.js](https://nodejs.org/) e npm (para compilar os recursos com Grunt)
- PHP 5.6 ou superior, com a extensão **PDO SQLite** habilitada

## Instalação

### Dependências Node/npm

Clone o repositório e instale as dependências:

```bash
npm install
```

Isso instalará as dependências necessárias para executar as tarefas do `Grunt`.

### Configuração do PHP

Os exemplos em PHP requerem a extensão **PDO SQLite** habilitada. Certifique-se de que sua instalação do PHP possua suporte a SQLite e que o arquivo `bd_web.sqlite` esteja presente na raiz do projeto.

## Como Executar a Aplicação

1. Compile os recursos (JS e CSS) executando na raiz do projeto:

   ```bash
   npx grunt concat uglify
   ```

2. Inicie um servidor local. É possível usar o PHP embutido:

   ```bash
   php -S localhost:8000
   ```

3. Acesse `http://localhost:8000/index.html` ou `http://localhost:8000/examples/base.php`. A página inicial redireciona para `examples/base.php`, onde os aniversariantes são listados.

## Usando o Grunt

O arquivo `Gruntfile.js` define tarefas para concatenar e minificar o código da FlipClock. Você pode rodar apenas a compilação uma vez com:

```bash
npx grunt concat uglify
```

Ou manter o `watch` ativo, recompilando automaticamente a cada alteração, com:

```bash
npx grunt
```

## Executando com Docker

O projeto inclui um `Dockerfile` que compila os recursos com Node e serve a aplicação com PHP + Apache:

```bash
docker build -t sgsravex .
docker run -p 8080:80 sgsravex
```

Depois acesse `http://localhost:8080`.

## Estrutura do Projeto

```
├── src/            # Código-fonte da biblioteca FlipClock.js
├── compiled/        # Arquivos JS/CSS gerados pelo Grunt
├── examples/         # Exemplos de uso (HTML/PHP)
├── js, css/          # Assets estáticos
├── Gruntfile.js       # Tarefas de build (concat/uglify/watch)
├── Dockerfile          # Build multi-stage (Node + PHP/Apache)
└── bd_web.sqlite         # Banco SQLite de exemplo
```

## Licença

Este projeto é distribuído sob a licença [MIT](license.txt).
