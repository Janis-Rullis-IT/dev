# Multiple-Vhosts-Simulate-PROD

```yml
VIRTUAL_HOST: elixir.local elixir.prod
```

### docker-compose.yml

```yml
  elixir-frontend:
    container_name: elixir-frontend
    build:
        context: $FRONTEND_DIR
        dockerfile: Dockerfile
    environment:
        VIRTUAL_HOST: elixir.local elixir.prod
    volumes:
        - '$FRONTEND_DIR:/var/www:rw'
    networks:
        elixir-net:
            ipv4_address: 172.60.1.10
```