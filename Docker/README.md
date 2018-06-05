# Docker

## Great reads

* [Best practices for writing Dockerfiles (docs.docker.com)](https://docs.docker.com/v17.09/engine/userguide/eng-image/dockerfile_best-practices/)
* [Dockerfile reference (docs.docker.com)](https://docs.docker.com/engine/reference/builder/#run)
* [Docker: Easy as build, run, done! (medium.freecodecamp.org)](https://medium.freecodecamp.org/docker-easy-as-build-run-done-e174cc452599)
* [How To Run A Docker Container (slashroot.in)](https://www.slashroot.in/how-run-docker-container)
* [Create Docker Containers Using the Command Line Interface (codefresh.io)](https://codefresh.io/docker-tutorial/create-docker-containers-command-line-interface/)

## Interesting

* [Handy Docker commands for local development - Part 1 (andrewlock.net)](https://andrewlock.net/handy-docker-commands-for-local-development-part-1/)
* [Best practices for writing Dockerfiles (docs.docker.com).](https://docs.docker.com/develop/develop-images/dockerfile_best-practices/)
* [How is Docker different from a normal virtual machine?](https://stackoverflow.com/a/16048358)
* [Composing Docker Local Development: Networking (previousnext.com.au)](https://www.previousnext.com.au/blog/composing-docker-local-development-networking)

## Install

* [Docker.](Install-docker.md)
* [Docker-composer.](Install-docker-compose.md)

## How to tunnel outside to the localhost?

* [From inside of a Docker container, how do I connect to the localhost of the machine?
(StackOverflow)](https://stackoverflow.com/a/24326540)
* [Using localhost for to access running container (forums.docker.com)](https://forums.docker.com/t/using-localhost-for-to-access-running-container/3148/3)
* [Unable to access localhost network inside a container(https://github.com/docker)](https://github.com/docker/for-mac/issues/1898)
* [How to access Docker Container as localhost (medium.com/@katopz)](https://medium.com/@katopz/use-nginx-to-bind-localhost-to-docker-ee804387e1ba)

## Commands

```shell
docker-compose CMD container1 [container2 container3 ...]
```
* up - Create and start containers
* restart -           Restart service
* down -              Stop and remove all containers, networks, images, and volumes.


### Parameters

```shell
docker-compose up PARAM container1 container2
```

* Auto start as daemon - d


## Create a base image

* [Create a base image (/docs.docker.com)](https://docs.docker.com/develop/develop-images/baseimages/)

## Container name restricitons

```shell
ERROR: Cannot create container for service a: Invalid container name (a), only [a-zA-Z0-9][a-zA-Z0-9_.-] are allowed
```
It seems, it should be at least 2 chars long, because this appeared when container was named 'l' or 'a'.

## Run CMD as sudo

```Dockerfile
CMD [ "sudo", "npm", "test" ]
````