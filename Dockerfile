FROM php:7.4-apache

# Habilitar o módulo mod_rewrite do Apache
RUN a2enmod rewrite

# Copiar o arquivo de configuração customizado do Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

