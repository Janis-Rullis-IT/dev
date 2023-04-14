# [XDebug3 in a docker](https://www.youtube.com/watch?v=ZIGdBSD6zvU)
* https://code.visualstudio.com/docs/editor/debugging
* 
## VSCode `php debug` extension/launch.json

```json
{
    // Use IntelliSense to learn about possible attributes.
    // Hover to view descriptions of existing attributes.
    // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            // server => local
            "pathMappings": {
                "/var/www/html": "${workspaceFolder}"
            }
        },
        {
            "name": "Launch currently open script",
            "type": "php",
            "request": "launch",
            "program": "${file}",
            "cwd": "${fileDirname}",
            "port": 0,
            "runtimeArgs": [
                "-dxdebug.start_with_request=yes"
            ],
            "env": {
                "XDEBUG_MODE": "debug,develop",
                "XDEBUG_CONFIG": "client_port=${port}"
            }
        },
        {
            "name": "Launch Built-in web server",
            "type": "php",
            "request": "launch",
            "runtimeArgs": [
                "-dxdebug.mode=debug",
                "-dxdebug.start_with_request=yes",
                "-S",
                "localhost:0"
            ],
            "program": "",
            "cwd": "${workspaceRoot}",
            "port": 9003,
            "serverReadyAction": {
                "pattern": "Development Server \\(http://localhost:([0-9]+)\\) started",
                "uriFormat": "http://localhost:%s",
                "action": "openExternally"
            }
        }
    ]
}
```

## docker-compose.yaml

```yml
extra_hosts:
      - "host.docker.internal:host-gateway"
```

## Dockerfile

```Dockerfile
RUN if [ $WITH_XDEBUG = "true" ] ; then \
        pecl install xdebug; \
        docker-php-ext-enable xdebug; \
        echo "xdebug.mode=debug,develop" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        echo "xdebug.discover_client_host=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        echo "xdebug.output_dir=/var/www/html/storage/logs/" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
        echo "xdebug.log=xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
    fi ;
```

## Build

```shell
docker-compose build --build-arg WITH_XDEBUG=true
```

## VSCode/Listen for Xdebug/Play

* Ctrl + Shift + D
* F5

## Make a call to the site

* In a browser or Postman.

## Desired outcome

![https://code.visualstudio.com/assets/docs/editor/debugging/debugging_hero.png](https://code.visualstudio.com/assets/docs/editor/debugging/debugging_hero.png)
