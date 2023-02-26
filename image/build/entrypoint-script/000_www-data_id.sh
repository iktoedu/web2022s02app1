#!/bin/sh

set -e

if [ -n "${WWW_DATA_USER_UID}" ]; then
  CURRENT_USER_UID=`id -u www-data`
  if [ "${WWW_DATA_USER_UID}" -ne "${CURRENT_USER_UID}" ]; then
    usermod -u "${WWW_DATA_USER_UID}" www-data
  fi
fi

if [ -n "${WWW_DATA_GROUP_GID}" ]; then
  CURRENT_GROUP_GID=`id -g www-data`
  if [ "${WWW_DATA_GROUP_GID}" -ne "${CURRENT_GROUP_GID}" ]; then
    groupmod -g "${WWW_DATA_GROUP_GID}" www-data
  fi
fi
