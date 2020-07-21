FROM php:7.4-fpm

RUN apt-get update \
    && apt-get install -y libzip-dev\
    && docker-php-ext-install zip pdo_mysql \
    && curl -sL https://deb.nodesource.com/setup_12.x | bash - && apt-get install -y nodejs \
    && apt-get install -y git

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV COMPOSER_HOME /composer
ENV PATH ./vendor/bin:/composer/vendor/bin:$PATH
ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www/app