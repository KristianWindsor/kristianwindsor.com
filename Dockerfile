FROM php:7.0-apache

COPY ./src/conf/apache2.conf /etc/apache2/
COPY ./src/ /var/www/html

RUN chown -R www-data:www-data /var/www/html/