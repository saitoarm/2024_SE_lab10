# ใช้ PHP 8.3 กับ Apache
FROM php:8.3-apache

# ติดตั้ง PHP extensions ที่จำเป็น
RUN docker-php-ext-install mysqli pdo pdo_mysql

# ติดตั้ง Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# ตั้งค่า Apache DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# ตั้งค่า Working Directory
WORKDIR /var/www/html

# คัดลอกโค้ดโปรเจกต์ Laravel ไปยัง Docker image
COPY . /var/www/html

# ตั้งค่า permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# ติดตั้ง dependencies ของ Laravel
RUN composer install --no-interaction --no-dev --optimize-autoloader

# ตั้งค่า Apache document root
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf