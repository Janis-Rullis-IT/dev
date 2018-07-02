# Create a cron job

* [ubuntu/Cron (janis-rullis/pc-server)](https://github.com/janis-rullis/pc-server/blob/master/ubuntu/Cron.md)
* [dev/Elixir-Phoenix/Cron (janis-rullis/dev)](https://github.com/janis-rullis/dev/blob/master/Elixir-Phoenix/Cron.md)
* [How to run a cron job inside a docker container? (stackoverflow.com)](https://stackoverflow.com/a/37458519)
* [Run a cron job with Docker (ekito.fr)](https://www.ekito.fr/people/run-a-cron-job-with-docker/)


## A working example

* [janis-rullis/elixir](https://github.com/janis-rullis/elixir/blob/master/backend/Dockerfile)

## In your project create the cron file

```
# This file will be added to system cron jobs when
# this Docker container will build.

# m h  dom mon dow   command

* * * * * sh /app/cron-mix.sh >> /app/storage/cron.log 2>&1
```

## Setup the task when building the container

```Dockerfile
# Add the cronfile to systemš cron tasks.
RUN apt-get update && apt-get -y install cron

# Make crontab file accessible to the Dockerfile.
ADD crontab /app/crontab

# Add to system's cron jobs.
RUN crontab /app/crontab
```