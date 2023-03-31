FROM composer:latest as composer

FROM php:8.1-fpm

RUN apt-get update && \
    apt-get install -y \
        curl \
        libpng-dev \
        libjpeg-dev \
        libpq-dev \
        libzip-dev \
        && \
    docker-php-ext-configure gd --with-jpeg && \
    docker-php-ext-install gd pdo_mysql mysqli pdo_pgsql zip && \
    docker-php-ext-enable pdo_mysql mysqli pdo_pgsql zip

COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY .  /var/www/html
RUN ls
ENV COMPOSER_ALLOW_SUPERUSER=1
EXPOSE 9000
CMD composer install
CMD ["php-fpm"]
