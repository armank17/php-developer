# php-developer

clone the proyect https://github.com/armank17/php-developer.git

create a virtual host with path: "php-developer/prueba-backend/public"

cd php-developer/prueba-backend composer install

create database prueba-backend

configure DB_CONNECTION in file .env

php artisane migrate (for create the tables)

php artisan db:seed (for create defaul users)



Example webservices route
- /
- /register
- /webservices/users?salary_start=1000&salary_end=1500&per_page=50&page=1
