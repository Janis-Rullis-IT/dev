# Inter-container communications

## NGINX proxy container

* nginx-proxy
* networks
* extra_hosts

```yaml
version: '3'
services:
    nginx-proxy:
        container_name: nginx-proxy
        image: jwilder/nginx-proxy
        ports:
            - '80:80'
        volumes:
            - '/var/run/docker.sock:/tmp/docker.sock:ro'
        networks:
            - my-net
    container-1:
        container_name: container-1
        extra_hosts:
            - 'container1.local container-2.local:172.17.0.1'
        networks:
            - my-net
    container-2:
        container_name: container-2
        extra_hosts:
            - 'container1.local container-2.local:172.17.0.1'
        networks:
            - my-net
networks:
    my-net: null
```

> bash: ping: command not found

## Check other containers URL

### FRONT -> API

```shell
curl api.container.local
```

### API -> FRONT

```shell
curl container.local
```

> `<html>  <head>`
