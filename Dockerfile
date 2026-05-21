FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git unzip curl libsqlite3-dev nodejs npm

RUN docker-php-ext-install pdo pdo_sqlite

COPY . /app

WORKDIR /app

RUN touch database/database.sqlite

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

RUN composer install --no-dev --optimize-autoloader

RUN php artisan migrate --force

RUN php artisan db:seed --force

RUN npm install
RUN npm run build

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000
