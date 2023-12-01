## How to install 

## 1. Get repository from: https://github.com/pult3r/movies :
<br/>
$ gh repo clone pult3r/movies<br/>
or<br/>
$ git clone https://github.com/pult3r/movies.git<br/>

## 2. Go to project directory :<br/>
$ cd movies

## 3. Install composer :<br/>
$ composer install

## 4. Create .env file by :<br/>
$ cp .env.example .env

## 5. Open .env file and set you database acceess settings :<br/>
DB_DATABASE=movies<br/>
DB_USERNAME=your_mysql_login<br/>
DB_PASSWORD=your_mysql_password<br/>

## 6. open mysql console and create Movies database : <br/>
CREATE DATABASE movies DEFAULT CHARACTER SET = 'utf8mb4';

## 7. Add aplication key :<br/>
$ php artisan key:generate

## 8. Make database migration :<br/>
$ php artisan migrate

## 7. Add movies from file /storage/dbdata/movies.json to database :<br/>
$ php artisan db:seed

## 8. Execute server :<br/>
$ php artisan serve

## Important : <br/>
If you have Laravel problem 'Permission denied' - set corect permissions!


