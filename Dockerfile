FROM php:8-apache AS builder

RUN apt-get update && apt-get install -y git libzip-dev libpng-dev zip \
    && git clone https://github.com/rathena/FluxCP /fluxcp --depth=1 \
    && rm -rf /fluxcp/.git \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure zip && \
    docker-php-ext-install pdo pdo_mysql zip gd mysqli

FROM php:8-apache

RUN apt-get update && apt-get install -y zip libpng16-16 libzip5 \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions
COPY --chown=www-data:www-data --from=builder /fluxcp /var/www/html

WORKDIR /var/www/html

COPY --chown=www-data:www-data ./config/application-env.php ./config/servers-env.php /var/www/html/config/

RUN sed -i 's/application.php/application-env.php/g' /var/www/html/index.php && \
    sed -i 's/servers.php/servers-env.php/g' /var/www/html/index.php

RUN docker-php-ext-enable pdo pdo_mysql zip gd mysqli

ENV BASE_PATH="" \
    SITE_TITLE="Flux Control Panel" \
    RO_SERVER_NAME="FluxRO" \
    INSTALLER_PASSWORD=secretpassword

EXPOSE 80
