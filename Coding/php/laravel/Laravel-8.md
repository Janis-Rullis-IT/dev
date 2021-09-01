# Laravel 8

# [From 5.8](https://github.com/Janis-Rullis-IT/lara5-vue2-api/issues/14)

* [Upgrade Docker to Ubu 20.04 and PHP 7.4.]((https://github.com/Janis-Rullis-IT/lara5-vue2-api/issues/14) or [PHP 8](https://github.com/Janis-Rullis-IT/lara5-vue2-api/issues/17).

## Set in `composer.json`

### Mentioned in lara's upgrade page

```json
{
"laravel/framework": "^8.0",
"phpunit/phpunit": "^9.0"
}
```

### Set latest versions

> From https://github.com/laravel/laravel/blob/8.x/composer.json or manually.

* https://github.com/laravel/tinker/releases
* https://github.com/dingo/api/releases 
* https://github.com/fruitcake/laravel-cors/releases
* https://github.com/fideloper/TrustedProxy/releases

### Remove currently unused libs and scripts

> Can be added later one by one.
Like `"fzaninotto/faker": "^1.4",`.

## Keep the container alive 

* https://github.com/Janis-Rullis-IT/dev/blob/4f55a1f6701e5e0d422aa577942e3a310d5feb28/Tools/Docker/Keep-container-alive.md

## Connect to the container

```shell
docker exec -it ruu-laravel5 bash
```

## Call composer update

```shell
composer update -W             
```

## Test lara's CLI

```shell
php artisan config:clear
```

## Raises an error `in /var/www/app/Exceptions/Handler.php on line 35`

```
PHP Fatal error:  Declaration of App\Exceptions\Handler::report(Exception $exception) must be compatible with Illuminate\Foundation\Exceptions\Handler::report(Throwable $e) in /var/www/app/Exceptions/Handler.php on line 35
PHP Fatal error:  Uncaught ReflectionException: Class App\Exceptions\Handler does not exist in /var/www/vendor/laravel/framework/src/Illuminate/Container/Container.php:873
```

### Solution

Take the example from v.8. lib - https://github.com/laravel/laravel/blob/8.x/app/Exceptions/Handler.php

## Raises an error `In ProviderRepository.php line 208:`
                                                   
```
Class 'Barryvdh\Cors\ServiceProvider' not found  
```

### Solution

* https://laracasts.com/discuss/channels/general-discussion/class-barryvdhcorsserviceprovider-not-found?page=1&replyId=596966

## When all errors are solved

```shell
docker stop ruu-laravel5
./start.sh
```

```shell
rm -f bootstrap/cache/config.php
composer clear-cache
composer dumpautoload -o
composer install
php artisan config:clear
php artisan cache:clear

php artisan migrate
```

## Last step - migration fails

Solved in https://github.com/Janis-Rullis-IT/lara5-vue2-api/issues/4#issuecomment-906990013

## Test the page

http://ruu.local/ opens but has problems with displaying products because http://api.ruu.local/products throws an error.

## Check on Postman http://api.ruu.local/products

Right, doh, Docker still has the TAIL cmd instead of RUN.

```shell
docker stop ruu-laravel5
docker-compose build --no-cache ruu-laravel5
docker-compose up ruu-laravel5
```

## Now it gives 502 because of a ref to PHP 7.2

laravel5/build/nginx/site.conf

## `Barryvdh\\Cors\\HandleCors] does not exist`

### Solution

* https://laracasts.com/discuss/channels/general-discussion/class-barryvdhcorsserviceprovider-not-found?page=1&replyId=596966

Now Postman returns the expected output.

## CORS error from the website

`MissingAlloweOriginHeader`.

laravel5/config/cors.php

```
'allowedOrigins' => ['*'],
'allowedOriginsPatterns' => [],
```

but https://github.com/fruitcake/laravel-cors/blob/master/config/cors.php has `allowed_origins`.

Yes, this is mentioned in https://github.com/fruitcake/laravel-cors#upgrading-from-0x--barryvdh-laravel-cors

`The casing on the props in cors.php has changed from camelCase to snake_case, so if you already have a cors.php file you will need to update the props in there to match the new casing.`.

## Try to refresh the cors

* Replace cors.php content with https://github.com/fruitcake/laravel-cors/blob/master/config/cors.php 
* Set this `'paths' => ['*'],`.

Now works.

```
root@cba9c206488f:/var/www# php artisan 
Laravel Framework 8.56.0
```
