# Use the PHP 8.1 FPM image as the base image
FROM php:8.1-fpm

# Copy the Composer binary from the Composer 2 image
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# Install system dependencies including locale, Git and unzip utility
# Locales settings are required to properly format dates, times and numbers
RUN apt-get update -y \
  && apt-get -y install --no-install-recommends \
    locales \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    libonig-dev \
  # Clean up apt cache to reduce image size
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* \
  # Generate the en_US.UTF-8 locale
  && locale-gen en_US.UTF-8 \
  # Use nproc to install PHP extensions
  # This allows us to use the maximum number of CPU cores to compile the extensions,
  # which speeds up the process significantly
  && docker-php-ext-install -j$(nproc) \
    intl \
    pdo_mysql \
    zip \
    bcmath \
    sockets \
  # Set Composer config options to prevent timeouts when running Composer commands
  && composer config -g process-timeout 3600 \
  && composer config -g repos.packagist composer https://packagist.org

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory to the default web directory
WORKDIR /var/www/html

# Copy Laravel codebase to default web directory
COPY . /var/www/html