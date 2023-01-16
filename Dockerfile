FROM php:8.0-apache

COPY . /var/www/capstone-ss23
WORKDIR /var/www/capstone-ss23

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y git unzip zip default-mysql-client

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions gd pdo_mysql
