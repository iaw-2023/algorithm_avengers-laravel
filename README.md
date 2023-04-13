# Tienda online de Manos Argentinas 🙌️🇦🇷️
Nuestra ropa no te cambia, te muestra tal cual sos

## Idea general 🧠️
El sistema será un aplicación web para administrar la compra/venta de remeras artesanales del proyecto Manos Argentinas. 
Los clientes podrán crearse cuentas, añadir al carrito y realizar compras de los diferentes productos que ofrece la página.
Por su lado, los empleados podrán subir, dar de baja y actualizar los productos.
Sistema hecho por la comisión Algorithm Avengers (Silvestre Migliaro y David López)

## Modelo de entidad-relación 📚️

![diagrama](https://i.imgur.com/9zzMD8W.jpg)

Las entidades modelan:
- Cliente: los clientes que pueden visualizar la página y hacer compras de productos por lote
- Empleado: los empleados que administran los productos que ofrece la página
- Producto: los productos, que pueden ser remeras, buzos, camisetas, etc
- Categoría: las diferentes categorías a las que puede pertenecer un producto (por ejemplo, un producto puede ser para hombre, adulto y buzo)
- DetalleOrden: un cliente puede comprar más de un mismo producto
- Compra: una vez que el cliente decide comprar todo lo que añadió al carrito, esto se convierte en una compra. El precio de la compra es la suma de los precios de los productos (multiplicados por la cantidad de cada uno)

## Proyecto Framework PHP - Laravel 👨‍💻️ 
- ¿Qué entidades se podrán actualizar?
	- Producto: lo pueden actualizar los empleados
	- Categoría: lo pueden actualizar los empleados
	- Empleados: lo pueden actualizar los empleados
	- Cliente: lo pueden actualizar los clientes
	
- ¿Qué reportes se podrán generar o visualizar?
	- Cliente: puede ver la lista de productos (puede listarlos por categoría) y su lista de compras
	- Empleado: puede ver la lista de productos, la lista de compras, la lista de categorías y la lista de clientes
	
- ¿Qué entidades se podrán obtener por API?
	Todas las entidades
	
- ¿Qué entidades se podrán modificar por API?
	Todas la entidades modificables

## Proyecto Javascript - React/Vue 💻️
- ¿Qué información podrá ver el usuario?
	El usuario cliente podrá ver la lista de productos (puede listarlos por categoría) y su lista de compras
	El usuario empleado podrá ver la lista de productos, la lista de compras, la lista de categorías y la lista de clientes
	
- ¿Qué acciones podrá realizar? Ya sea la primera vez que ingrese a la aplicación como futuros accesos a la misma
	El usuario cliente podrá crearse una cuenta (por primera vez), iniciar sesión, crear compras, cerrar sesión y modificar/eliminar su cuenta.
	El usuario empleado podrá crear/modificar/eliminar productos, crear/modificar/eliminar categorías, y modificar/eliminar su cuenta

<br />

## Pasos

- clonar el repo https://github.com/iaw-2023/laravel-template y mantener como owner la organización de la materia.
## parados en el directorio del repositorio recientemente clonado, ejecutar:

- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan serve`

Con el último comando, pueden acceder a http://127.0.0.1:8000/ y ver la cáscara de la aplicación Laravel

### Requisitos

- tener [composer](https://getcomposer.org/) instalado
- tener [php](https://www.php.net/) instalado



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
