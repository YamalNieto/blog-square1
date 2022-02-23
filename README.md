# Square1-test

Technical test for Square1. Blog built with 
Laravel and dockerized.

### Installation

- Copy the .env.example to .env `cp .env.example .env`
- Execute `docker-compose build && docker-compose up -d`
- Once built, get into the blog_php service:
- `docker exec -it blog_php /bin/sh` and execute:
- `composer install`
- `php artisan key:generate`
- `php artisan migrate --seed`
- Finally go to `http://blog.fuf.me`


If it continues asking you for the key, do the following:
- `docker-compose down` and then `docker-compose up -d`
