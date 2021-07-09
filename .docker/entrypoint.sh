#!/bin/sh
composer install
php-fpm
php artisan config:cache
exec "$@"
