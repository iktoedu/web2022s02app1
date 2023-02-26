#!/bin/sh

set -xe

# Core extensions
docker-php-source extract
docker-php-ext-configure bz2
docker-php-ext-install bz2
docker-php-ext-configure bcmath
docker-php-ext-install bcmath
docker-php-ext-configure calendar
docker-php-ext-install calendar
docker-php-ext-configure exif
docker-php-ext-install exif
docker-php-ext-configure ffi
docker-php-ext-install ffi
docker-php-ext-configure gd --with-freetype --with-jpeg
docker-php-ext-install -j$(nproc) gd
docker-php-ext-configure gettext
docker-php-ext-install gettext
docker-php-ext-configure intl
docker-php-ext-install intl
docker-php-ext-configure ldap
docker-php-ext-install ldap
docker-php-ext-configure mysqli
docker-php-ext-install mysqli
docker-php-ext-configure pcntl
docker-php-ext-install pcntl
docker-php-ext-enable opcache
docker-php-ext-configure pdo_dblib
docker-php-ext-install pdo_dblib
docker-php-ext-configure pdo_mysql
docker-php-ext-install pdo_mysql
docker-php-ext-configure pdo_pgsql
docker-php-ext-install pdo_pgsql
docker-php-ext-configure pgsql
docker-php-ext-install pgsql
docker-php-ext-configure soap
docker-php-ext-install soap
docker-php-ext-configure sockets
docker-php-ext-install sockets
docker-php-ext-configure xsl
docker-php-ext-install xsl
docker-php-ext-configure zip
docker-php-ext-install zip
docker-php-source delete

# PECL exensions
pecl install apcu-5.1.21
docker-php-ext-enable apcu
pecl install mongodb-1.12.0
docker-php-ext-enable mongodb
pecl install redis-5.3.5
docker-php-ext-enable redis
pecl install memcache-8.0
docker-php-ext-enable memcache
pecl install xdebug-3.2.0
docker-php-ext-enable xdebug
