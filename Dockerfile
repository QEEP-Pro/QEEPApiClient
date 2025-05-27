FROM php:7.2-fpm-alpine

RUN apk add --no-cache \
    autoconf \
    g++ \
    make \
    php7-dev \
    php7-pear

RUN mkdir -p /tmp/xdebug \
    && curl -L https://xdebug.org/files/xdebug-2.9.8.tgz | tar -xz -C /tmp/xdebug --strip-components=1 \
    && cd /tmp/xdebug \
    && phpize \
    && ./configure --enable-xdebug \
    && make \
    && make install \
    && docker-php-ext-enable xdebug \
    && rm -rf /tmp/xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www

WORKDIR /var/www

ENV COMPOSER_ALLOW_SUPERUSER=1

CMD ["php-fpm"]
