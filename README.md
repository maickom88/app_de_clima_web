App de Clima Web
=======================

### Para ultilizar o App de Clima Web verifique se possui instalado em sua maquina:
Consulte
- [Laravel](https://laravel.com/docs/8.x) 
- [Composer](https://getcomposer.org)

# Instalando
Ao ter configurar seu ambiente de desenvolvimento, e clonar esse repo, use os comandos abaixo para inicar a instalação das dependências

```cmd
$ composer install
```

Se houver error tente
```cmd
$ composer update
```

Atenção Renomeie o arquivo .env.exemple para .env
Em seguida gere a sua chave usando o comando abaixo!
```cmd
$ php artisan key:generate
```

Em seguida gere a sua chave usando o comando abaixo!

###### Verifique na pasta raiz se foi gerado umarquivo com nome .env!

# Iniciar servidor
Para iniciar o servidor você pode usar os comandos abaixo dentro da pasta raiz!

```cmd
$ php artisan serve
```
### Atenção se irá usar seu device(Smarthphone) como emulador, você precisa rodar o seguinte comando abaixo!

```cmd
$ php artisan serve --host 0.0.0.0
```
