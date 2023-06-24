FROM php:8.1-apache

RUN docker-php-ext-install pdo_mysql \
&& docker-php-ext-install mysqli \
&& a2enmod rewrite

COPY .docker/php-apache/php.ini /usr/local/etc/php/

RUN apt-get update -y && apt-get install -y -qq git \
	libwebp-dev\
	libpng-dev\
	zlib1g-dev \
	libjpeg62-turbo-dev \
	apt-transport-https \
	libfreetype6-dev \
	libmcrypt-dev \
	libssl-dev \
	libzip-dev \
	zip unzip \
	wget \
	msmtp \
	vim

RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install -j$(nproc) iconv zip gd bcmath

# opcache config
RUN set -eux; \
	docker-php-ext-enable opcache; \
	{ \
		echo 'opcache.memory_consumption=128'; \
		echo 'opcache.interned_strings_buffer=8'; \
		echo 'opcache.max_accelerated_files=4000'; \
		echo 'opcache.revalidate_freq=2'; \
		echo 'opcache.fast_shutdown=Off'; \
	} > /usr/local/etc/php/conf.d/opcache-recommended.ini

# msmtp configuration
COPY .docker/php-apache/msmtprc /etc/msmtprc

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer