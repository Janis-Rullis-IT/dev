# Volumes

* [Manage data in Docker (docs.docker.com)](https://docs.docker.com/storage/)
* [Compose file version 3 reference (docs.docker.com)](https://docs.docker.com/compose/compose-file/#volumes)
* [The ups and downs of docker-compose — how to run multi-container applications (medium.freecodecamp.org)](https://medium.freecodecamp.org/the-ups-and-downs-of-docker-compose-how-to-run-multi-container-applications-bf7a8e33017e)

## Defaults

By default all files created inside a container are stored on a writable container layer. This means that:

* **The data doesn’t persist when that container is no longer running**, and it can be difficult to get the data out of the container if another process needs it.
* A container’s writable layer is tightly coupled to the host machine where the container is running. **You can’t easily move the data somewhere else**.
* Writing into a container’s writable layer requires a storage driver to manage the filesystem. The storage driver provides a union filesystem, using the Linux kernel. **This extra abstraction reduces performance as compared to using data volumes, which write directly to the host filesystem.**

## Shorthand

You can replace data in a container using the format <path to file>:<path to location in container> and can follow this with the permissions, such as :ro for read-only.


```Dockerfile
version: '3.2'
services:
    elixir-mysql:
        container_name: elixir-mysql
        image: 'mariadb:latest'
        restart: unless-stopped
        ports:
            - '$MYSQL_PORT:$MYSQL_PORT'
        volumes:
            - ./db/mysql:/var/lib/mysql:rw
```

## Long

```Dockerfile
version: '3.2'
services:
    elixir-mysql:
        container_name: elixir-mysql
        image: 'mariadb:latest'
        restart: unless-stopped
        ports:
            - '$MYSQL_PORT:$MYSQL_PORT'
        volumes:
          - type: bind
            source: ./db/mysql
            target: /var/lib/mysql
```

## Point to file

Prepend './'

```yaml
 - ./db:/data/db
```

## Choose the right type of mount

* bind - on host, any process can access. Bind mounts are very performant.
* volume - special fs dedicated for Docker, only docker processes can access.
* tmpfs - on host memory.
