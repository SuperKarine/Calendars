FROM php:8.0-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

COPY . /var/www/html

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html

RUN a2enmod rewrite

RUN a2enmod headers

RUN a2enmod ssl

RUN apache2ctl -M

RUN php -m
