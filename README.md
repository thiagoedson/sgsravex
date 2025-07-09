# SGS

Este projeto apresenta um exemplo simples de cadastro de aniversariantes utilizando PHP e SQLite. A interface faz uso do plugin **FlipClock.js** para exibir contagens regressivas.

## Requisitos

- Node.js e npm
- PHP 5.6 ou superior

## Instalação

Clone o repositório e instale as dependências do Node:

```bash
npm install
```

## Build dos recursos

Os arquivos de scripts e estilos podem ser concatenados e minificados com o **Grunt**. Para gerar o conteúdo da pasta `compiled/`, execute:

```bash
npx grunt
```

## Execução

Com as dependências instaladas, rode um servidor PHP local na raiz do projeto:

```bash
php -S localhost:8000
```

Depois acesse `http://localhost:8000/index.html`. A página inicial fará o redirecionamento para `examples/base.php`, onde os aniversariantes são listados.

