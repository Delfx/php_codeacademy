FROM php:8.1.1-fpm-alpine3.15

RUN apk add --update \
	$PHPIZE_DEPS \
	freetype-dev \
	git \
	libjpeg-turbo-dev \
	libpng-dev \
	zip \
	libzip-dev \
	php8-pecl-imagick\	
	&& docker-php-ext-configure gd --with-jpeg --with-freetype \
	&& docker-php-ext-install gd

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN install-php-extensions zip
