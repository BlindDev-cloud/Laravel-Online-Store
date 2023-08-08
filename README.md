# Laravel-Online-Store
## Description:
This is an online store that uses React and Laravel frameworks for building UI and backend APIs.
## Required
php v8.1
node v18.17.0
npm
composer
docker
compose plugin for docker or docker-compose utility
## Build instruction
Execute local-build.sh or run these commands manually:
1. cp .env.example .env
2. cd react/; npm install; cd ..
3. composer install
4. docker compose up --build -d
5. docker exec -it laravel php artisan key:generate
6. docker exec -it laravel php artisan migrate --seed

Database seeding can throw an exception. In that case run the last command again.
