FROM php:8.2-cli

# Installe Composer
RUN apt-get update && apt-get install -y unzip curl git && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY . .

# Si tu as un fichier composer.json
RUN if [ -f composer.json ]; then composer install; fi

EXPOSE 10000

CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]
