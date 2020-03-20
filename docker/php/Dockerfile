FROM php:7.4-fpm-alpine

ARG PROJECT_PATH

RUN docker-php-ext-install pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer && composer

WORKDIR /work

#RUN composer install