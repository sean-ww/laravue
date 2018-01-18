FROM php:7.2.1-apache

MAINTAINER Sean Wallis

COPY . /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# installation of ssmtp
RUN DEBIAN_FRONTEND=noninteractive apt-get update && apt-get install --fix-missing -y ssmtp && rm -r /var/lib/apt/lists/*
ADD .docker/ssmtp.conf /etc/ssmtp/ssmtp.conf
ADD .docker/php-smtp.ini /usr/local/etc/php/conf.d/php-smtp.ini

WORKDIR /srv/app

RUN a2enmod rewrite \
    && docker-php-ext-install mbstring pdo pdo_mysql \
    && chown -R www-data:www-data /srv/app
