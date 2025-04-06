FROM php:8.2-fpm

COPY . /var/www/html

RUN apt-get update && apt-get install -y libzip-dev zlib1g-dev
RUN pecl install redis && docker-php-ext-enable redis
RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY php/conf/php.ini /usr/local/etc/php/conf.d/custom.ini

CMD [ "php-fpm" ]