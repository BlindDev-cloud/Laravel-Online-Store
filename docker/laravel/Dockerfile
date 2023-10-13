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

# Open port
EXPOSE 9000

# Run php-fpm
CMD ["php-fpm"]
