# [Containers](https://docs.docker.com/get-started/#test-docker-installation)

## [Docker: Image vs Container – What is What? – The Main Difference](https://www.shellhacks.com/docker-image-vs-container/)

The docker run command takes the Docker image as a template and produces a container from it.

## List

```shell
docker container ls
```

## See process / status

```shell
docker ps --no-trunc
```

### Is this system-wide or only in a specific directory?

System-wide - will show the same result everywhere.


## Connect in console

```shell
docker exec -it my-container bash
```

## Rebuild

```shell
docker-compose build
```

## Kill

```shell
docker-compose down
```