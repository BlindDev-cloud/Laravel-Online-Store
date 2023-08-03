#!/bin/bash

# Set permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Install project dependencies
composer install

# Start PHP-FPM
php-fpm
