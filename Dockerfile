FROM php:7.4-cli

RUN apt-get update && apt-get install -y \
        git \
        libzip-dev \
        zip

RUN docker-php-ext-install sockets
RUN docker-php-ext-install zip
