FROM php:8.3-apache

ENV APACHE_DOCUMENT_ROOT /var/www/html 

RUN a2enmod rewrite 
RUN docker-php-ext-install pdo pdo_mysql

COPY ./public /var/www/html

EXPOSE 80