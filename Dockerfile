# determinamos que estamos trabajando con una imagen de PHP
FROM php:8.1-apache

#Instalar las dependencias necesarias para trabajar con postgreSQL
RUN apt-get update && apt-get install -y \ 
    libpq-dev\
    && docker-php-ext-install pdo pdo_pgsql pgsql
# Copiar el contenido de mi app dentro delcontenedor que vamos a crear
COPY . /var/www/html/

#Exponer el puerto 80
EXPOSE 80