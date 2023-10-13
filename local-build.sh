#!/bin/bash
cp .env.example .env
chmod -R 777 ./storage ./bootstrap/cache
composer install
docker compose up --build -d
docker compose exec -it laravel php artisan key:generate
docker compose exec -it laravel php artisan migrate --seed
