# Usa una imagen oficial de Apache con PHP
FROM php:8.2-apache

# Copia todo el contenido del repositorio al directorio raíz de Apache
COPY . /var/www/html/

# Da permisos adecuados (opcional pero recomendado)
RUN chown -R www-data:www-data /var/www/html

# Expón el puerto 80
EXPOSE 80

# Opcional: habilita mod_rewrite si usas .htaccess
RUN a2enmod rewrite
