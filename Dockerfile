FROM php:8.4-apache

COPY . /var/www/html/
COPY docker/apache.conf /etc/apache2/conf-available/enginex.conf

RUN a2enmod headers \
    && a2enconf enginex \
    && chown -R www-data:www-data /var/www/html

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=5s --start-period=10s --retries=3 \
    CMD ["php", "-r", "exit(@file_get_contents('http://127.0.0.1/') === false ? 1 : 0);"]
