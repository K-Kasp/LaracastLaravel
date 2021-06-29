#!/bin/bash
php artisan key:generate
php artisan migrate
chown -R www-data:www-data storage/
php-fpm
