# Nanobox

* https://docs.nanobox.io/cli/

## Install

* https://dashboard.nanobox.io/download

```shell
nanobox config
nanobox login
nanobox remote ls
nanobox remote add my-dev
nanobox remote add my-prod production
nanobox remote ls
```

App Name     | Alias
----------|--------------
my-dev   | default
my-prod  | production


## Deploy

```shel
nanobox deploy
```
> Will deploy to dev because it is set as default.

```shell
nanobox deploy prod
```
> Will deploy to prod.

## Deploy progress

* https://dashboard.nanobox.io/apps/

## Help

```shell
nanobox -h
```