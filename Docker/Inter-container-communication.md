# Inter-container communications

## NGINX proxy container

```yaml
  nginx-proxy:
    container_name: nginx-proxy
    image: jwilder/nginx-proxy
    ports:
      -80:80
    volumes:
      - /var/run/docker.sock:/tmp/docker.sock:ro
    networks:
      - my-net
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

> <html>  <head>
