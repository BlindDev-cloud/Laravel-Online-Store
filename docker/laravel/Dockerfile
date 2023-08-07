FROM php:8.1-fpm

# Install packages
RUN apt-get update && apt-get install -y \
     git \
     curl \
     libpng-dev \
     libjpeg62-turbo-dev \
     libfreetype6-dev \
     libonig-dev \
     libxml2-dev \
     zip \
     unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extentions
RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd

# Install xdebug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define workdir
WORKDIR /var/www/html

# Copy the project to the container
COPY . .

# Set up projcet's permission
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Copy php configs
COPY /docker/laravel/php.ini /usr/local/etc/php/
COPY /docker/laravel/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Install project dependences
RUN composer install

# Generate incryption key
RUN php artisan key:generate

# Open port
EXPOSE 9000

# Run php-fpm
CMD ["php-fpm"]
