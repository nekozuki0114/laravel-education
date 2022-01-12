FROM php:8.1.0alpha3-fpm-alpine

# timezone environment
ENV TZ=Asia/Tokyo \
  # composer environment
  COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

RUN apk update && \
  apk upgrade && \
  apk add --update --no-cache \
  libzip-dev libpng-dev icu-dev \
  gcc g++ make automake autoconf gettext libtool nasm bash openssl \
  nodejs npm git

RUN apk add libxslt-dev
RUN apk add postgresql-dev
RUN docker-php-ext-install intl pdo_pgsql bcmath exif gd

#Composer install
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

RUN composer config -g process-timeout 3600 && \
  composer config -g repos.packagist composer https://packagist.org

COPY ./php-fpm.d/zzz-www.conf /usr/local/etc/php-fpm.d/zzz-www.conf
COPY ./php.ini /usr/local/etc/php/

WORKDIR /workspace/laravel
