FROM php:8.3-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    nodejs \
    npm \
    build-essential \
    libpng-dev \
    libonig-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    jq \
    chromium

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN pecl install xdebug-3.3.2
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl
RUN docker-php-ext-enable xdebug
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd opcache

ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS="0"
ADD opcache.ini "$PHP_INI_DIR/conf.d/opcache.ini"
RUN echo 'memory_limit = 256M' >> "$PHP_INI_DIR/conf.d/docker-php-memlimit.ini";
