FROM php:7.4-fpm

RUN apt-get update \
    && apt-get install -y libzip-dev\
    && docker-php-ext-install zip pdo_mysql \
    && curl -sL https://deb.nodesource.com/setup_12.x | bash - && apt-get install -y nodejs \
    && apt-get install -y git

ENV COMPOSER_HOME /composer
ENV PATH ./vendor/bin:/composer/vendor/bin:$PATH
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

RUN composer global require "laravel/installer"

WORKDIR /var/www/app