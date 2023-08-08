# Online-Store
## Description:
<p>This is an online store that uses React and Laravel frameworks for building UI and backend APIs.</p>

## Required
<ul>
<li>php v8.1</li>
<li>node v18.17.0</li>
<li>npm</li>
<li>composer</li>
<li>docker</li>
<li>compose plugin for docker or docker-compose utility</li>
</ul>

## Build instruction
<p>Execute local-build.sh or run these commands manually:</p>
<ol>
<li>cp .env.example .env</li>
<li>cd react/; npm install; cd ..</li>
<li>composer install</li>
<li>docker compose up --build -d</li>
<li>docker exec -it laravel php artisan key:generate</li>
<li>docker exec -it laravel php artisan migrate --seed</li>
</ol>
<p>Database seeding can throw an exception. In that case run the last command again.</p>
