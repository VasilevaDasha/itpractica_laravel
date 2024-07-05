FROM php:8.1-fpm

#Set working directory
WORKDIR /var/www

RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
libpng-dev \
libpq-dev 

# Install the PHP pdo_mysql extention
RUN docker-php-ext-install pdo pdo_mysql



