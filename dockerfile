FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git unzip curl

RUN docker-php-ext-install pdo pdo_mysql

COPY . /var/www
WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer install

CMD ["php-fpm"]
