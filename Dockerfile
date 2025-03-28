# Use a imagem oficial do PHP com Apache
FROM php:7.4-apache

# Ativa o mod_rewrite
RUN a2enmod rewrite

# Copia o código-fonte do projeto para o container
COPY ./src /var/www/html/

# Expõe a porta 80
EXPOSE 80