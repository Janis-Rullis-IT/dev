# Docker compose

## List defined images

```shell
docker-compose images
```

## [List config defined](https://docs.docker.com/compose/reference/config/)

*  --volumes
*  --services

```shell
docker-compose config --services
```

-## Start, up, run?

* [Should I use docker-compose start up or run? (stackoverflow)](https://stackoverflow.com/a/33066676)
* [What’s the difference between up, run, and start? (docs.docker.com)](https://docs.docker.com/compose/faq/#why-do-my-services-take-10-seconds-to-recreate-or-stop#whats-the-difference-between-up-run-and-start)

### 1. up

Typically, you want docker-compose up. Use up to start or restart all the services defined in a docker-compose.yml.

### run

For running “one-off” or “adhoc” tasks.

### start

Only to restart containers that were previously created, but were stopped.

## Stop

```shell
docker-compose stop my-frontend
```
> Stopping my-frontend ... done

Will not appear in the `docker ps`.

## up -- scale

Scale MY-SERVICE-NAMEE to NUM instances. Overrides the `scale` setting in the Compose file if present.

```shell
docker-compose up SERVICE_NAME  --scale MY-SERVICE-NAMEE=10
```