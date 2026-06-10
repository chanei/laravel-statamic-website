FROM php:8.4-fpm-alpine

# Install dependencies
RUN apk add --no-cache nginx supervisor curl zip unzip \
    libpng-dev libjpeg-turbo-dev freetype-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install opcache gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy project files to working directory
COPY . .

RUN apk add --no-cache nodejs npm
RUN npm install && npm run build

RUN cp .env.example .env

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

RUN php artisan key:generate --force

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage \
    && chmod -R 775 /var/www/html/storage

# Copy configs
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisord.conf

# Validate nginx config at build time
RUN nginx -t

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
