#!/bin/sh

set -e

if [ -d "/entrypoint-data/init.d" ]; then
  for FILE in /entrypoint-data/init.d/*; do
    if [ -x "${FILE}" ]; then
      ${FILE}
    fi
  done
fi

exec docker-php-entrypoint "$@"
