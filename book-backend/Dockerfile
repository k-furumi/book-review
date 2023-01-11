# Image
FROM php:8.0-fpm
ENV TZ Asia/Tokyo
ENV LANG ja_JP.UTF-8
ENV LANGUAGE ja_JP:ja

# Set up default directory
WORKDIR /var/www/app

RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Dependencies
RUN apt-get update
RUN apt-get install -y gnupg2

# Zip
RUN apt-get install -y libzip-dev zip && docker-php-ext-configure zip && docker-php-ext-install zip

# Git
RUN apt-get install -y git

# Curl
RUN apt-get install -y libcurl3-dev curl && docker-php-ext-install curl

# GD
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install gd

# MySQL
RUN apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_mysql

# BC Math
RUN docker-php-ext-install bcmath

# Custom php.ini config
COPY ./.conf/php.ini /usr/local/etc/php/php.ini

# Clean up
RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Composer installation
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# Copy Source
COPY . /var/www
RUN chmod 777 -R storage && chmod 777 -R bootstrap
RUN cp .env.example .env
RUN composer install

RUN php artisan key:generate

