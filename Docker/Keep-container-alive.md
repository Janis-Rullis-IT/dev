# Keep container alive

## Problem

Container starts fine, has no long running task so it exits with status code 0.

```shell
Recreating my-container ... done
Attaching to my-container
my-container exited with code 0
```

and leaves the container in a restart state (with `docker ps`)

> Restarting (0) 3 seconds ago

Which takes away chance to connect / log-into the container (with `docker exec -it my-container bash`)

> Error response from daemon: Container 5d904ddb92f056356a5a87adc189b0b515b3a755278a084731179da336233d13 is restarting, wait until the container is running.

## Fix

* [HOW TO KEEP DOCKER CONTAINERS RUNNING (bigdatums.net)](http://bigdatums.net/2017/11/07/how-to-keep-docker-containers-running/)

Add this at the bottom of the Dockerfile

```dockerfile
CMD tail -f /dev/null
```

and rebuild

```shell
docker-compose up --build
```

### Result

> 60f239d03b08        my-docker_my-container   "/bin/sh -c 'tail -f…"   23 seconds ago      Up 23 seconds                               

### Connect

```shell
docker exec -it my-container bash
```