FROM php:8.2-apache

COPY . /var/www/html/

# Cambia el DocumentRoot del sitio a /var/www/html/panel/admin
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/panel/admin|g' /etc/apache2/sites-available/000-default.conf

# Da permisos adecuados
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

RUN a2enmod rewrite
