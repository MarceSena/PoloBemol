# PoloBemol

-Sistema De Gerenciamento De Comunicação Com Clientes

-POLO SERIA O DEUS DOS VENTOS : MENSAGEIRO DE TUPÃ

## Informações do projeto
Esta aplicação foi desenvolvida em PHP Laravel

## Rodando o projeto localmente

-   Clone o [Projeto](https://github.com/MarceSena/PoloBemol.git)
-   Tenha em sua Maquina o [Composer](https://getcomposer.org/), o [PHP](https://www.php.net/) e o [Docker](https://www.docker.com/) instalado
-   Execute o comando em seu terminal `composer install`, para instalar todas as dependencias do projeto
-   Na raiz do projeto crie um novo arquivo chamado `.env` e compie os dados de `.env-exemple`.Mude as variaveis de ambiente:
-    `MAIL_MAILER=""`
-    `MAIL_HOST=smtp.""`
-    `MAIL_PORT=2525`
-    `MAIL_USERNAME=""`
-    `MAIL_PASSWORD=""`
-    `MAIL_ENCRYPTION=""`
-    `MAIL_FROM_ADDRESS=contato@bemoldigital.com.br`
-    `MAIL_FROM_NAME="${APP_NAME}"`

- disponivel em  em [Mailtrap](https://mailtrap.io/)
- Rode o comando `php artisan key:generate`, para gerar uma nova chave para o projeto, que poderá ser visto em `.env`.

- Ao final do processo feito anteriormente rode o comando `docker compose up` e aguarde a finalização
- Para colocar as tabelas no Banco de dadaos rode `php artisan migrate`

### Rotas da aplicação
-   Em seu navegado coloque a url `http://localhost/clients`

### OSB:
- Na pasta avaliação encontrasse as questoes e os diagramas do respectivo desafio