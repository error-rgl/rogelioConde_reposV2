## MultiLab Project
Solución de requerimientos
## Tecnologias
+ PHP `8.1.13`
+ Laravel `9.19`
+ MySql `8.0.31`

## Uso
### requisitos previos 
Primero debemos preparar nuestro entorno para ello debemos instalar:
* [Instalar Laravel 9]()
* [Instalar PHP > 7.4]()
* [Instalar MySQL](https://dev.mysql.com/downloads/)

### desplegando
1. Clone el repositorio.
2. inicie el servicio de mysql: sudo service mysql start (linux)
```
  1. Acceda a mysql y crea la base de datos: Create database multilab_db; y use multilab_db;
     ahora ubicandose en el directorio raiz del proyecto escriba 
     desde su consola el siguiente comando: php artisan migration
  2. En su directorio raiz edite el archivo .env con las credenciales de mysql que tenga y el nombre de la db
```
3. Instale las dependencias.
```
  1. para ello muevase al directorio rogelioConde_reposV2 y ejecute el comando: npm i
```
4. Inicie los servidores
```
  1. Frontend:
  para ello muevase al directorio rogelioConde_reposV2 y ejecute el comando: npm run dev
  2. Backend:
  para ello muevase al directorio rogelioConde_reposV2 y ejecute el comando: php artisan serve
```

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.