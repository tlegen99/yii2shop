FROM php:8.2-fpm

# Установка необходимых расширений PHP
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    nano \
    zsh \
    mc \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Установка зависимостей Composer
COPY composer.json /var/www/html/
COPY composer.lock /var/www/html/
WORKDIR /var/www/html
RUN composer install

# Копирование кода приложения
COPY . /var/www/html

# Установка прав для папок runtime и web/assets
RUN chown -R www-data:www-data /var/www/html/frontend/web/assets /var/www/html/frontend/runtime
RUN chown -R www-data:www-data /var/www/html/backend/web/assets /var/www/html/backend/runtime

# Открытие порта 9000 для PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]
