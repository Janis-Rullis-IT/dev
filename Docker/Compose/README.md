# Docker compose

## List defined images

```shell
docker-compose images
```

## Start, up, run?

* [Should I use docker-compose start up or run? (stackoverflow)](https://stackoverflow.com/a/33066676)
* [What’s the difference between up, run, and start? (docs.docker.com)](https://docs.docker.com/compose/faq/#why-do-my-services-take-10-seconds-to-recreate-or-stop#whats-the-difference-between-up-run-and-start)

## 1. up

Typically, you want docker-compose up. Use up to start or restart all the services defined in a docker-compose.yml.

## run

For running “one-off” or “adhoc” tasks.

## start

Only to restart containers that were previously created, but were stopped.