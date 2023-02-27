FROM php:8.2-apache-bullseye

ADD build /build

RUN set -uxe; \
    usermod -s /bin/bash www-data; \
    cp "${PHP_INI_DIR}/php.ini-development" "${PHP_INI_DIR}/php.ini"; \
    sh /build/install-packages.sh; \
    sh /build/install-php-ext.sh; \
    mv /build/entrypoint.sh /entrypoint.sh; \
    mkdir -p /entrypoint-data/init.d; \
    mv /build/entrypoint-script/* /entrypoint-data/init.d; \
    chmod a+x /entrypoint.sh; \
    rm -rf /build; \
    sed -i 's/\/var\/www\/html/\/var\/www\/web/' /etc/apache2/sites-available/000-default.conf; \
    a2enmod rewrite; \
    /bin/true

ENTRYPOINT ["/entrypoint.sh"]

CMD ["apache2-foreground"]
