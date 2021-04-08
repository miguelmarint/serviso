# SERVISO

Que es serviso

## Instalación

Dependencias de laravel.

```
$ composer install

$ cp .env.example .env

$ php artisan key:generate

$ php artisan storage:link
```

Antes de realizar las configuraciones es esencial crear un vhost sobre la carpeta public del proyecto.

## Migrar base de datos

```
$ php artisan migrate --seed
```

## Instalar dependencias de Node para Vue.js

```
$ npm install
```

Compilar los *assets* de Javascript (`dev` en desarrollo, `prod` en producción).

```
$ npm run dev    # para compilar los cambios de vue en ambiente de desarrollo

$ npm run prod   # para compilar los cambios de vue en ambiente de producción

$ npm run watch  # para tomar los cambios en tiempo real
```
