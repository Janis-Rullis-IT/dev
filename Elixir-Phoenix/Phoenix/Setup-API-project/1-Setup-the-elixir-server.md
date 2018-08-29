# Setup a new API project

## Pre-requisites

* [Install docker and docker-compose](../../../Docker).
* Move to [files](files) directory.

## Edit `.env`

Change 'FILL_THIS' values.

## Uncomment tail CMD in [files/backend/Dockerfile](files/backend/Dockerfile)

```Dockerfile
`CMD tail -f /dev/null`
```

## Start the server

```shell
docker-compose up --build
```

## Connect to the server

```shell
docker exec -it elixir-backend bash
```

## Generate the project's base

```shell
mix phx.new backend --no-brunch --no-html --no-brunch --database mysql
```
>  / postgres / mssql

```
* creating elixir_backend/config/config.exs
Fetch and install depeemailndencies? [Yn] y
We are all set!
```

## Move the project's files to the current dir

```shell
mv backend/* .
rm backend -R
```

## Additional .gitignore rules

```shell
nano .gitignore
```

```
/_build
/db
/deps
/*.ez
erl_crash.dump
/node_modules
/config/*.secret.exs
.history/
.elixir_ls
/nbproject/private/
storage
```

## Create the db /  Open [Phpmyadmin](http://172.60.1.14)

```sql
CREATE DATABASE `elixir`;
```

## Replace CMD in [files/backend/Dockerfile](files/backend/Dockerfile)

```Dockerfile
CMD ["./run.sh"]
```

## Setup dev.secret.exs

### At the bottom of 'dev.exs' include 'dev.secret.exs'

```shell
nano config/dev.exs
```

```ex
import_config "dev.secret.exs"
```

### Copy prod.secret.exs

```shell
cp config/prod.secret.exs config/dev.secret.exs
nano config/dev.secret.exs
```

In dev.secret.exs, override sensitive values. Like

```exs
use Mix.Config

# Configure your database
config :backend, Backend.Repo,
  adapter: Ecto.Adapters.MySQL,
  username: "FILL_THIS",
  password: "FILL_THIS",
  database: "elixir",
  hostname: "172.60.1.13",
  pool_size: 10,
  timeout: 60_000,
  pool_timeout: 40_000
```

## Rebuild the server

```shell
docker-compose up --build elixir-backend
```

## Connect to the server

```shell
docker exec -it elixir-backend bash
```

### If the elixir server does not startup because of dependency errors

```shell
sudo mix deps.clean --all
sudo mix deps.get
```

```
elixir-backend    | [info] Running BackendWeb.Endpoint with Cowboy using http://0.0.0.0:4000
```