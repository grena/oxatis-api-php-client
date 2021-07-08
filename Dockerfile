FROM php:7.4-cli

RUN apt-get update && apt-get install -y \
        git \
        libzip-dev \
        libxml2-dev \
        zip

RUN docker-php-ext-install sockets
RUN docker-php-ext-install zip
RUN docker-php-ext-install soap

RUN pecl install xdebug-2.8.1 \
    && docker-php-ext-enable xdebug

RUN echo "xdebug.idekey=\"PHPSTORM\"" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_port=9000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.remote_host=172.17.0.1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
