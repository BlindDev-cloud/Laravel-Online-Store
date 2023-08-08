#!/bin/bash
cp .env.example .env
cd react/; npm install; cd ..
composer install
docker compose up --build -d
docker compose exec -it laravel php artisan key:generate
docker compose exec -it laravel php artisan migrate --seed
