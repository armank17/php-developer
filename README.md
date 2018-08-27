# php-developer

clone the proyect https://github.com/armank17/php-developer.git

create a virtual host with path: "php-developer/prueba-backend/public" example: **http://prueba-backend.local**

cd php-developer/prueba-backend composer install (for install dependencies /vendor)

create database **prueba_backend**

configure DB_CONNECTION in file .env

- DB_USERNAME=root
- DB_PASSWORD=



php artisane migrate (for create the tables)

php artisan db:seed (for create defaul users)



## Example webservices route

http://prueba-backend.local/

http://prueba-backend.local/register

http://prueba-backend.local/webservices/users?salary_start=1000&salary_end=1500&per_page=50&page=1
