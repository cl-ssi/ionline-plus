FROM php:8.2-fpm-alpine

# Instalar dependencias y extensiones PHP en una sola capa
RUN apk add --no-cache nginx wget \
        libjpeg-turbo-dev \
        libpng-dev \
        libwebp-dev \
        freetype-dev \
        libxml2-dev \
        icu-dev \
        libzip-dev \
        mdbtools-utils \
        poppler-utils \
    && docker-php-ext-configure gd --with-jpeg --with-webp --with-freetype \
    && docker-php-ext-configure intl \
    && docker-php-ext-install -j$(nproc) \
        mysqli \
        pdo \
        pdo_mysql \
        gd \
        soap \
        zip \
        bcmath \
        intl \
        opcache \
        pcntl \
    && docker-php-ext-enable pdo_mysql intl \
    && mkdir -p /run/nginx /app \
    && chown -R www-data:www-data /app


# RUN docker-php-ext-install mysqli pdo pdo_mysql
# RUN docker-php-ext-enable pdo_mysql
# As of PHP 7.4 we don't need to add --with-png
# RUN docker-php-ext-configure gd --with-jpeg --with-webp --with-freetype
# RUN docker-php-ext-install gd
# RUN docker-php-ext-install soap
# RUN docker-php-ext-install zip
# RUN docker-php-ext-install bcmath
# RUN docker-php-ext-configure intl
# RUN docker-php-ext-install intl
# RUN docker-php-ext-enable intl
# RUN docker-php-ext-install opcache
# RUN docker-php-ext-install pcntl

# RUN mkdir -p /run/nginx
# Copiar configuraciones
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/php.ini /usr/local/etc/php/conf.d/docker-php.ini

# Configurar directorio de trabajo
WORKDIR /app

# RUN mkdir -p /app
# COPY . /app

# Copiar los archivos del proyecto
COPY --chown=www-data:www-data . /app

# RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
# RUN cd /app && \
#     /usr/local/bin/composer install --no-dev

# Instalar Composer y dependencias
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader \
    && php artisan views:cache
    # Otras optimizaciones

# RUN chown -R www-data: /app

# Exponer el puerto que FrankenPHP utilizará
# EXPOSE 8000

# Comando para ejecutar Octane con FrankenPHP
# CMD ["frankenphp", "serve", "--host=0.0.0.0", "--port=8000"]

CMD sh /app/docker/startup.sh
