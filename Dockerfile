FROM php:8.2-apache

COPY . /var/www/html/

# Cambia el DocumentRoot al login principal
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/nequi/bdigital|g' /etc/apache2/sites-available/000-default.conf

# Prioriza index.html sobre index.php
RUN echo "DirectoryIndex login.html index.html index.php" > /etc/apache2/conf-available/custom-index.conf \
    && a2enconf custom-index

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

RUN a2enmod rewrite
