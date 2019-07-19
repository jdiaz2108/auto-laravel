<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Auto Laravel

Prueba realizada en laravel.

Para iniciar el proyecto es necesario tener instalado [Composer](https://getcomposer.org/download/) y tambien algun gestos de bases de datos como puede ser [xampp](https://www.apachefriends.org/es/index.html).

1. Clonar repositorio remoto `git clone https://github.com/jdiaz2108/auto-laravel.git` o descargarlo en archivo .zip y descomprimir.
2. Copiar el archivo `.env.example` y renombrar el archivo copiado por `.env`, en ese archivo editar la parte del nombre de la base de datos local `DB_DATABASE=nombre_de_base_datos`, edita el nombre del usuario generalmente llamado root `DB_USERNAME=nombre_usuario_bd_local` y editar la contraseña de la base de datos local `DB_PASSWORD=contraseña_bd_local`.
3. Ubicarse en la raíz del proyecto e insertar el código `composer update`.
5. Insertar el código `php artisan key:generate` para generar la llave en el proyecto laravel.
6. Insertar el código `php artisan migrate --seed` para cargar las bases de datos incluyendo los seeds.
7. Correr el proyecto laravel `php artisan serve`.
8. Ir a la dirección  `http://localhost:8000/` en el navegador.

Cualquier duda comunicarse al 319 711 3358, enviar un correo a jdiaz2108@hotmail.com o enviar un [whatsapp](https://api.whatsapp.com/send?phone=573197113358).
