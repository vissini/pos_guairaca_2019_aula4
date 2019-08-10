<h1>Aula 4 - PHP com Laravel - Pós Desenvolvimento de Aplicações Web - Guairacá</h1>

<p>Neste aula aprendemos a parte de autenticação.</p>

<h3>Instalação</h3>

Para instalar clonar o projeto, acessar a pasta e seguir os seguintes passos
<ul>
  <li>Criar seu banco de dados (neste exemplo foi utilizado MySql)</li>
  <li>Rodar o comando: composer install</li>
  <li>Criar o arquivo .env (Pode ser duplicado do arquivo .env.example</li>
  <li>Alterar o arquivo .env com as configurações corretas.</li>
  <li>Rodar o comando: php artisan migrate (esse comando serve para criar as tabelas no banco de dados)</li>
  <li>Rodar o comando: php artisan db:seed (para criar os registros)</li>
  <li>Rodar o comando: php artisan serve (vai subir o servidor)</li>
  <li>Acessar a URL: http://localhost:8000 e testar a aplicação</li>
</ul>

Caso não funcione a parte de autenticação parar o servidor e rodar o comando
php artisan make:auth
