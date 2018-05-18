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

### What happens if the app name is incorrect?

Will build but not upload.

> ! Sorry, the app 'aaaa' doesn't exist.

### Deploy progress

It takes some time (max 2 min) on your PC to build it and then push it.

> Starting Nanobox :

> Preparing environment :

> Building runtime :

> Compiling application :

> Deploying app :

> ✓ Success, this deploy is on the way!

>  Check your dashboard for progress.

#### After upload

See in the [dashboard](https://dashboard.nanobox.io/apps/)

## Help

```shell
nanobox -h
```