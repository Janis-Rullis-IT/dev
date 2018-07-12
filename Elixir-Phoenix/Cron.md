# Cron

## In Dockerfile

```Dockerfile
RUN apt-get install --yes build-essential inotify-tools cron nano mc htop

# Setup all required to call tasks from crontab.
RUN ln -s /usr/local/bin/elixir /usr/bin/elixir
RUN ln -s /usr/local/bin/mix /usr/bin/mix
RUN ln -s /usr/local/bin/erl /usr/bin/erl


# Add crontab file in the cron directory
ADD crontab /app/crontab

# Move it to system crons.

RUN crontab /app/crontab

# Setup all required to call tasks from crontab.
RUN ln -s /usr/local/bin/elixir /usr/bin/elixir
RUN ln -s /usr/local/bin/mix /usr/bin/mix
RUN ln -s /usr/local/bin/erl /usr/bin/erl

ADD storage /app/storage/
RUN chmod a+w /app/storage -R
RUN service cron start
```

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

## Use Ecto (DB) in a cron task / Fix `.Repo is not started, please ensure it is part of your supervision tree`

* [ensure_started() (hexdocs.pm)](https://hexdocs.pm/elixir/Application.html#ensure_started/2)
* [Starting mix task process dependencies (stackoverflow.com)](https://stackoverflow.com/a/35714348)
* [ecto.ex (github.com/elixir-ecto)](https://github.com/elixir-ecto/ecto/blob/master/lib/mix/ecto.ex#L86)
* [ecto.migrate.ex (github.com/elixir-ecto)](https://github.com/elixir-ecto/ecto/blob/df13b1c64f8edd128cec1316336b20f3153eafa3/lib/mix/tasks/ecto.migrate.ex#L67)


```ex
import Mix.Ecto

def run(args) do
    ensure_started(Your.Repo, [])
end
```

## Possible snags

* [Nanobox does not execute Your cron tasks](../Nanobox/Crron.md)