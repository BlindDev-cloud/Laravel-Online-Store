FROM php:8.1-fpm

# Install packages
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y \
     build-essential \
     libpng-dev \
     libjpeg62-turbo-dev \
     libfreetype6-dev \
     locales \
     zip \
     jpegoptim optipng pngquant gifsicle \
     vim \
     unzip \
     git \
     curl \
     libonig-dev \
    libzip-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extentions
RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    zip \
    exif \
    pcntl \
    gd

# Install xdebug
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy xdebug configs
COPY /docker/php-fpm/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Copy xdebug configs
COPY /docker/php-fpm/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Define workdir
WORKDIR /var/www/html

# Open port
EXPOSE 9000

# Run php-fpm
CMD 'php-fpm'
