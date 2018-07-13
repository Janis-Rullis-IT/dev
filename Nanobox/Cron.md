# Nanobox Cron

* [Setup Elixir/Cron](../Elixir-Phoenix/Cron.md)

## Cron is not running?

### Check

#### NB stops them when building

Check live logs in Nanobox dashboard, when building a container. There at the bottom will be 'INFO: Stopping cron service...'.

#### The task is not moved to sys crontab

* Connect to the server via console `nanobox console elixir-dev web.main`
* `crontab -e` will be empty.
* But if exec the same command `crontab /app/crontab` (as in Docker) then it will be added. Which means that it can be added.

## Why?

Nanobox has it's own way how to add cron tasks and it prevents other ways.

* [Nanobx Cron jobs (docs.nanobox.io)](https://docs.nanobox.io/app-config/cron-jobs/)
* [boxfile/web/cron (docs.nanobox.io)](https://docs.nanobox.io/boxfile/web/#cron-jobs)
* [worker (docs.nanobox.io)](https://docs.nanobox.io/boxfile/worker/)
* [Runtime & Services (docs.nanobox.io)](https://docs.nanobox.io/app-config/runtime-services/)
* [Deploy config (docs.nanobox.io)](https://docs.nanobox.io/boxfile/deploy-config/)

## Set up cron

```yml
web.main:
  start: node-start mix phx.server
  writable_dirs:
    - priv
    - _build
    - storage
  cron:
    - id: my_cron
      schedule: '*/5 * * * *'
      command:  sh /app/cron.sh >> /app/storage/cron.log 2>&1
```

## Check if cron is set

```shell
crontab -e
```
> Empty.

`shell
service cron status
```
> * cron is running


## Log of a runing cron

```
I, [4 #31031] INFO -- web.main.1[cron1]: Starting: my_cron
```