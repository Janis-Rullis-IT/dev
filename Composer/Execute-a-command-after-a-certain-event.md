## Execute a command after a certain event

* [List of events](https://getcomposer.org/doc/articles/scripts.md#what-is-a-script-).

### Include custom Smarty plugins after composer has installed all packages

Include by copying custom plugins into the Smarty's plugin directory.

#### The script 

`cp -u $PWD/smarty-custom-plugins/* vendor/smarty/smarty/libs/plugins/",`

#### composer.json with the command

```
{
        "require": {
                "smarty/smarty": "3.1.13"
        },
        "scripts": {
                "post-install-cmd": [
                        "cp -u $PWD/smarty-custom-plugins/* vendor/smarty/smarty/libs/plugins/","
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


#### CANCELED Previous solution

Include by adding symlinks to the custom plugins into the Smarty's plugin directory.

#### The script 

`ln -s $PWD/smarty-custom-plugins/* vendor/smarty/smarty/libs/plugins/`

#### Why canceled?

This command raises `...: File exists` error, if executed multiple times.