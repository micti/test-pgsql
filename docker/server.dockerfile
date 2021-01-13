FROM php:7.3-apache

RUN a2enmod rewrite

RUN apt-get update

RUN apt-get install -y postgresql-client libpq-dev

RUN docker-php-ext-install pdo_pgsql
