# Silex-Eloquent-Skeleton

Um simples [Silex](http://silex.sensiolabs.org/) Skeleton App, que suporta as seguintes dependências:

 - Console "Jarvis" (baseado no [Symfony Console](http://symfony.com/doc/current/components/console.html))
 - Eloquent ORM ([[1](https://github.com/illuminate/database)], [[2](http://laravel.com/docs/5.4/queries)], [[3](http://laravel.com/docs/5.4/eloquent)])
 - Suporte a migrations e seeds utilizando o [Phinx](https://phinx.org/)
 - Error Handler [Whoops](http://filp.github.io/whoops/)
 - [Symfony VarDumper](http://symfony.com/doc/current/components/var_dumper.html)
 - [Twig](http://twig.sensiolabs.org/)

## Instalação
* Clone o repositório
* Sete seu web root para a pasta `public` e redirecione todas as requisições para o arquivo `public/index.php`
* Copie `app/config.sample.yml` para `app/config.yml`, e configure seu timezone e credenciais de banco de dados
* Navegue pelo app
* Para ver a lista de comandos disponíveis, use no terminal o comando "php jarvis"
* Start developing!

**Nota:** Após a instalação, por favor deixe suas sugestões!