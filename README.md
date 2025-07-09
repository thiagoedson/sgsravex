# SGS

Este repositório contém a biblioteca **FlipClock.js** e exemplos de uso para exibir contadores e relógios no navegador. Há também pequenos scripts PHP que demonstram como integrar a biblioteca com um banco SQLite.

## Objetivo

Fornecer modelos prontos de contagem regressiva e contadores progressivos que podem ser usados em projetos web. Os exemplos mostram diferentes configurações de relógio e integração com um banco de dados para listar aniversários e outros eventos.

## Funcionalidades Principais

- Relógios em formato de 12h ou 24h
- Contagem regressiva e contadores incrementais
- Exemplos de uso da biblioteca com jQuery
- Scripts PHP (com PDO/SQLite) para servir dados a partir de `bd_web.sqlite`

## Instalação

### Dependências Node/npm
1. Tenha o [Node.js](https://nodejs.org/) e o npm instalados.
2. Dentro da pasta do projeto, execute:

```bash
npm install
```

Isso instalará as dependências necessárias para executar as tarefas do `Grunt`.

### Configuração do PHP

Os exemplos em PHP requerem a extensão **PDO SQLite** habilitada. Certifique-se de que sua instalação do PHP possua suporte a SQLite e que o arquivo `bd_web.sqlite` esteja presente na raiz do projeto.

## Como Executar a Aplicação

1. Compile os recursos (JS e CSS) executando na raiz do projeto:

```bash
npx grunt
```

O comando acima gera os arquivos em `compiled/` e inicia um *watch* para recompilar sempre que houver alterações.
2. Inicie um servidor local. É possível usar o PHP embutido:

```bash
php -S localhost:8000
```

3. Acesse `http://localhost:8000/examples/base.php` ou qualquer outro arquivo da pasta `examples/` para ver a biblioteca em funcionamento.

## Usando o Grunt

O arquivo `Gruntfile.js` define tarefas para concatenar e minificar o código da FlipClock. Você pode rodar apenas a compilação uma vez com:

```bash
npx grunt concat uglify
```

ou manter o `watch` ativo usando simplesmente `npx grunt`.

