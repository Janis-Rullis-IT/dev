# Cron

## In Dockerfile

```Dockerfile
RUN apt-get install --yes build-essential inotify-tools cron nano mc htop

# Setup all required to call tasks from crontab.
RUN ln -s /usr/local/bin/elixir /usr/bin/elixir
RUN ln -s /usr/local/bin/mix /usr/bin/mix
RUN ln -s /usr/local/bin/erl /usr/bin/erl
RUN service cron start
````

## `run.sh`

```shell
service cron start
```

## `crontab -e`

```
* * * * * sh /app/cron-mix.sh >> /app/storage/cron.log 2>&1
```

## `cron-mix.sh`

```ex
set -e;
cd /app
mix user -n "Cron Tab" -f true
```