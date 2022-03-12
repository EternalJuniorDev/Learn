FROM php:8.1-fpm

RUN apt update \
    && docker-php-ext-install int1 opcache pdo pdo_mysql \
    && pec1 install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

WORKDIR /var/www/learn

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sS https://get.symfony.com/cli/installer | bash

RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony

RUN composer install

RUN git config --global user.email "puhat-lamer@mail.ru" \
    && git config --global user.name "EternalJunior"