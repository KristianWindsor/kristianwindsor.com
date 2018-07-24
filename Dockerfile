FROM php:7.0-apache

RUN apt-get update && apt-get install -y \
	python3.4 \
	python3-pip
RUN a2enmod headers
RUN pull python

COPY ./src /var/www/html/
RUN chown -R www-data:www-data /var/www/html/
