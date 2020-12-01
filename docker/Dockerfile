FROM amd64/php:8.0-fpm

# RUN printf "deb http://archive.debian.org/debian/ jessie main\ndeb-src http://archive.debian.org/debian/ jessie main\ndeb http://security.debian.org jessie/updates main\ndeb-src http://security.debian.org jessie/updates main" > /etc/apt/sources.list

RUN apt-get update && apt-get install -y \
    git \
    zip \
    nginx \
        libmcrypt-dev \
        libzip-dev \
        libicu-dev \
        libxpm-dev \
        libssl-dev \
        g++ \
        supervisor \
    && pecl install  redis && docker-php-ext-enable  redis \
    && docker-php-ext-install iconv \
        pdo_mysql \
        zip

RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN apt-get update && apt-get install -y \
        libmagickwand-dev --no-install-recommends


RUN rm /etc/nginx/sites-available/default
ADD supervisor-worker.conf /etc/supervisor/conf.d/worker.conf

WORKDIR /var/www/web

COPY init.sh /usr/local/bin

RUN curl -sS https://getcomposer.org/installer | \
php -- --install-dir=/usr/bin/ --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER=1

ENTRYPOINT ["/usr/local/bin/init.sh"]
