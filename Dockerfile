# Dockerfile
FROM php:8.4-fpm-alpine

# Устанавливаем расширения
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip curl libonig-dev libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install exif 

WORKDIR /var/www/html