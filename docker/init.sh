#!/bin/sh
set -e

nginx -g 'daemon off;' &
supervisord &
php-fpm
