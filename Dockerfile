FROM php:rc-apache
ADD ./ /var/www/html/
RUN apt-get update && apt-get install -y \
    php7.0-mysqli \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli 

