FROM php:8.0-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        wget\
        nano \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \   
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install zip 
    

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN  a2enmod rewrite &&  service apache2 restart \
     && pecl install mongodb && composer require mongodb/mongodb --ignore-platform-reqs

RUN set -eux; \		
  { echo 'post_max_size = 100M'; \
  echo 'upload_max_filesize = 100M'; \
  echo 'variables_order = EGPCS'; } > /usr/local/etc/php/conf.d/sail.ini;

RUN { \
  echo '<FilesMatch \.php$>'; \
  echo '\tSetHandler application/x-httpd-php'; \
  echo '</FilesMatch>'; \
  echo; \
  echo 'DocumentRoot /var/www/html/public/'; \
  echo 'DirectoryIndex index.php index.html'; \
  echo; \
  echo '<Directory /var/www/html/>'; \
  echo '\tOptions Indexes FollowSymLinks MultiViews'; \
  echo '\tAllowOverride All'; \
  echo '\tOrder allow,deny'; \
  echo '\tallow from all'; \
  echo '\tRequire all granted'; \
  echo '</Directory>'; \
  } | tee "$APACHE_CONFDIR/conf-available/laravel.conf" \
  && a2enconf laravel

COPY --chown=www-data:www-data . .    

COPY .env .env

RUN composer install

USER www-data

EXPOSE 8080