FROM php:7.4-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY . /var/www/

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u 1000 -d /home/hagar hagar
RUN mkdir -p /home/hagar/.composer && \
    chown -R hagar:hagar /home/hagar

# Set working directory
WORKDIR /var/www

USER hagar