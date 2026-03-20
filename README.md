# Buscador de Cursos Alura

Projeto desenvolvido em **PHP** que realiza a busca e extração de cursos disponíveis no site da **Alura** através de web scraping.

O objetivo deste projeto é praticar conceitos importantes do ecossistema PHP moderno, como:

* Gerenciamento de dependências com **Composer**
* Requisições HTTP utilizando **Guzzle**
* Manipulação e análise de HTML com **Symfony DomCrawler**
* Testes automatizados com **PHPUnit**
* Boas práticas de organização de código

## 🚀 Funcionalidades

* Realiza requisições HTTP para páginas de cursos
* Analisa o HTML retornado
* Extrai os títulos dos cursos encontrados
* Retorna os dados em formato estruturado
* Possibilidade de execução via **linha de comando (CLI)** utilizando o arquivo binário do projeto

## 🧱 Tecnologias utilizadas

* PHP
* Composer
* Guzzle HTTP Client
* Symfony DomCrawler
* PHPUnit

## 📦 Instalação

Clone o repositório:

```bash
git clone https://github.com/filipebastos0/buscador-cursos-alura.git
```

Acesse a pasta do projeto:

```bash
cd buscador-cursos-alura
```

Instale as dependências:

```bash
composer install
```

## ▶️ Como utilizar

### Uso via código PHP

Exemplo básico de uso:

```php
$httpClient = new Client();
$buscador = new BuscadorCursos($httpClient);
$cursos = $buscador->buscar('https://www.alura.com.br/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
```

### Uso via terminal (CLI)

Após instalar as dependências, também é possível executar o buscador diretamente pelo terminal utilizando o arquivo binário do projeto:

```bash
vendor/bin/buscar-cursos.php.bat
```

O comando irá acessar a página informada e listar no terminal os cursos encontrados.

## 🎯 Objetivo do projeto

Este projeto foi desenvolvido com fins **educacionais**, para praticar conceitos de:

* Scraping de páginas HTML
* Testes automatizados
* Arquitetura básica de aplicações PHP
* Uso de bibliotecas populares do ecossistema PHP

## 📄 Licença

Este projeto está licenciado sob a licença **MIT**.
