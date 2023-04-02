# GRUPO5_TAD


## Para usar el proyecto

### Raiz del proyecto: ../GRUPO5_TAD/CarUPO/
 
* Ejecutar en la raiz del proyecto: composer install
* Copiar .env.example con el nombre .env
* Ejecutar en la raiz del proyecto: php artisan key:generate
* Crear la base de datos "CREATE DATABASE tu_base_de_datos;"
* Indicar el nombre de la base de datos en el .env
* Ejecutar en la raiz del proyecto: php artisan migrate:fresh
* Ejecutar en la raiz del proyecto: php artisan migrate:fresh --seed
