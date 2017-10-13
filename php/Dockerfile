FROM php:fpm-alpine
LABEL author="Ganesha <reekoheek@gmail.com>"

# DEV: Install xdebug
RUN apk add --no-cache autoconf g++ make
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN rm -rf /tmp/*

# DEV: Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
