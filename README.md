# Laravel
Laravel Plantilla

## Pre-requisitos
* Servidor de web Apache (PHP >= 7.3) [XAMPP](https://www.apachefriends.org/es/index.html)
* Gestor de paquetes php [Composer](https://getcomposer.org/download/)
* Node js >= 14 [Node.js](https://nodejs.org/en/)

## Despues de clonar el proyecto

Instalar las dependencias de composer (backend)

```
composer install
``` 

### Crear el archivo .env

Genera key para el proyecto

```
php artisan key:generate
```

Ejecutar servidor pagina dev(publish localhost)

```
php artisan serve
```

Instalar las dependencias frontend

```
npm i
``` 

Compilar assets de frontend

```
npm run dev
``` 
