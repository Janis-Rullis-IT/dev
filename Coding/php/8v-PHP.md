# 8v-PHP.md
*  https://github.com/Janis-Rullis-IT/lara8-vue2-api/issues/17#issuecomment-907065934

# Upgrade to PHP 8

* https://computingforgeeks.com/how-to-install-php-on-ubuntu-2/
* https://linuxize.com/post/how-to-install-php-8-on-ubuntu-20-04/

```shell
docker stop ruu-laravel8
docker-compose build --no-cache ruu-laravel8
docker-compose up ruu-laravel8
```

```shell
docker exec -it ruu-laravel8 bash
rm -f bootstrap/cache/config.php
composer clear-cache
composer dumpautoload -o
composer install
php artisan config:clear
php artisan cache:clear

php artisan migrate
exit
```

```
root@7a90d4683e09:/var/www# php -v
PHP 8.0.10 (cli) (built: Aug 26 2021 15:50:07) ( NTS )
```
