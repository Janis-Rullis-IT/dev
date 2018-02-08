# Notes about composer

## Add a new package from [packagist.org](packagist.org).

`composer require composer/composer:1.5`

where 1.5 is a [release version](https://packagist.org/packdages/composer/composer).

## [Running composer in a different directory than current](https://stackoverflow.com/questions/33080068/running-composer-in-a-different-directory-than-current)

`composer install -d=fmw/core/tool/`

## Execute a command after a certain event

* [List of events](https://getcomposer.org/doc/articles/scripts.md#what-is-a-script-).

### Include custom Smarty plugins after composer has installed all packages

Include by adding symlinks to the custom plugins into the Smarty's plugin directory.

#### The script 

`ln -s $PWD/smarty-custom-plugins/* vendor/smarty/smarty/libs/plugins/`

#### composer.json with the command

```
{
        "require": {
                "smarty/smarty": "3.1.13"
        },
        "scripts": {
                "post-install-cmd": [
                        "ln -s $PWD/smarty-custom-plugins/* vendor/smarty/smarty/libs/plugins/"
                ]
        }
}
```

#### composer.json with a script that executes the command

This is useful if have multiple commands.

```
{
        "require": {
                "smarty/smarty": "3.1.13"
        },
        "scripts": {
                "post-install-cmd": [
                        "./build.sh"
                ]
        }
}
```