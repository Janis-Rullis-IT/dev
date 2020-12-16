# `docker-compose.yml` - the list of Virtual Machines / containers

> See a working `docker-compose.yml` [example here](https://github.com/Janis-Rullis-IT/flexi-tic-tac-toe/blob/523698d731e5de6aae2a168565d99a621c3e382d/docker-compose.yml).

Tells what virtual OSes ([containers](https://www.google.com/search?q=docker+container)) needs to be started when the `docker-compose up` command is executed.

Those containers are **completely isolated** - You install stuff on 1 container, it's fine, it won't affect the other. The only thing that somewhat connects them is the defined network they share. With the common network they can communicate with each other (each container has it's IP assigned).

For each container there's defined **which folders are shared with the host**. 
For example, `- './my-cute-project-lives-here:/var/www:rw'` means that `my-cute-project-lives-here` folder in Your PC is connect to the containers/VM's `/var/www`.

### How does it know what to install for each container? - `Dockerfile` - OS installation instructions

* The `docker-compose up` command finds the container list in the `docker-compose.yml` and their shared folders. In those folders it looks for `Dockerfile`.
* Read more [Whatd does the `Dockerfile` do?](https://github.com/Janis-Rullis-IT/dev/blob/36e8a82a91b4667f96a515cd99c74bc70b12c454/Tools/Docker/README.md#what-does-the-dockerfile-do-short-answer----os-installation-instructions).

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
