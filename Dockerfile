# Usa a imagem php:7.4-apache
FROM php:7.4-apache

# Instala o Composer e dependências necessárias para PHP
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia o diretório principal e as variáveis de ambiente para o container
COPY encontros/ /var/www/html/
COPY .env /var/www/html/

# Define o diretório de trabalho como o local do site
WORKDIR /var/www/html/

# Atualiza as dependências do compose para instalar também a classe vlucas/phpdotenv 
RUN composer update vlucas/phpdotenv --no-dev --optimize-autoloader

# Instala as dependências do Composer
RUN composer install --no-dev --optimize-autoloader

# Ajusta as permissões do diretório
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Habilita o módulo rewrite do Apache (necessário para URLs amigáveis)
RUN a2enmod rewrite

# Configura o arquivo .htaccess
COPY encontros/.htaccess /var/www/html/encontros/.htaccess

