# Memo Test Game - Backend

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About

Backend made using Laravel, Lighthouse and GraphQL.
It is recommended to use Docker to run the project, you only need to have it installed. 
Otherwise, to run it locally you will need the following:
- PHP (v8.1 or higher)
- Composer
- Laravel
- MySQL
- MySQL compatible DB Client


## To Run it Using Docker

- Make sure you have docker on your system and you can run the docker-compose commands.
- Clone the repository and using a terminal go to the root of this project.
- Create an **.env** file in the application root directory (you can follow the .env.example file) and make sure it has the following lines:

		DB_CONNECTION=mysql
        DB_HOST=db
        DB_PORT=3306
        DB_DATABASE=homestead
        DB_USERNAME=homestead
        DB_PASSWORD=secret

- Run the following commands:

		docker compose build
 
		docker compose up -d
        
        docker exec -it memo-test-backend php artisan migrate
        
        docker exec -it memo-test-backend php artisan db:seed

_Note: Docker could rename your app. If you are having trouble with these commands, make sure docker names your app as 'memo-test-backend'. If not, change it in the last 2 commands to the correct name_ 

- You will now have your Laravel application running at: 

    [http://localhost:80](http://localhost:80/)

- You will have a graphql-playground to run your queries on the following URL:

    [http://localhost:80/graphql-playground](http://localhost:80/graphql-playground/)

- You can access a PHPMyAdmin web app to manage your application data at the following URL:

    [http://localhost:8080](http://localhost:8080/)


## To Run it Locally

- Make sure your system has the above mentioned.
- Clone the repository and using a terminal go to the root of this project.
- Create an **.env** file in the application root directory (you can follow the .env.example file) and make sure it has the following lines (change them as needed):

		DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=homestead
        DB_USERNAME=homestead
        DB_PASSWORD=secret

- Run the following commands:

		composer install
 
		php artisan migrate
        
        php artisan db:seed
        
        php artisan serve

- You will now have your Laravel application running at: 

    [http://localhost:8000](http://localhost:8000/)

- You will have a graphql-playground to run your queries on the following URL:

    [http://localhost:8000/graphql-playground](http://localhost:8000/graphql-playground/)

- Use your DB client to see your mutations reflected.
