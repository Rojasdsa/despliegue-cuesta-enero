# Dockerfile

# Utiliza una imagen base de PHP con Apache
FROM php:apache

# Copia archivos del proyecto al contenedor
COPY ./ /var/www/html/

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Instala extensión MySQLi
RUN docker-php-ext-install mysqli

# Reinicia el servicio de Apache
RUN service apache2 restart

# Expone el puerto 80
EXPOSE 80
