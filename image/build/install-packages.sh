#!/bin/sh

set -xe

apt-get update
apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libpq-dev \
    libssl-dev \
    libicu-dev \
    libxml2-dev \
    libxslt-dev \
    libldap2-dev \
    freetds-dev \
    libsqlite3-dev \
    libbz2-dev \
    libzip-dev \
    libffi-dev \
    ssl-cert \
    wget \
    git \
    unzip \
    p7zip \
    default-mysql-client
apt-get clean
make-ssl-cert generate-default-snakeoil --force-overwrite
