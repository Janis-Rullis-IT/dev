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

## List

```shell
nanobox remote ls
```

App Name     | Alias
----------|--------------
my-dev   | default
my-prod  | production

## Help

```shell
nanobox -h
```

## Connect to console

* [Console  (docs.nanobox.io)](https://docs.nanobox.io/cli/console/)
* [Remote Access (docs.nanobox.io)](https://docs.nanobox.io/live-app-management/remote-access/)
* [nanobox_cli.sh (github.com/LeCoupa/awesome-cheatsheets/)](https://gist.github.com/LeCoupa/d5c1e0ffa43a171e64429a658a8ad52f)

```shell
nanobox console -h
```

```
Open an interactive console inside a component.

Usage:
  nanobox console [<local | dry-run | {remote-alias}>] <component.id> [flags]

Flags:
  -u, --user string   user you would like to console in as

Global Flags:
      --debug     In the event of a failure, drop into debug context
  -t, --trace     Increases display output and sets level to trace
  -v, --verbose   Increases display output and sets level to debug
      --version   Print version information and exit
```
### Connect to selected [remote alias](#list)

```shell
nanobox console elixir-dev web.main
nanobox console elixir-prod web.main
```

#### Connect to the local test env

```shell
nanobox console dry-run web.main
```

#### Connect to non-existing

```shell
nanobox console elixir-tomato web.main
```
>  Sorry, the app 'elixir-tomato' doesn't exist