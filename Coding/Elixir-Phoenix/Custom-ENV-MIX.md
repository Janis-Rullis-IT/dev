# Custom ENV / Mix

By default there is :prod, :dev, :test, but you can add more.

## Print current ENV

```ex
Mix.env()
```
> :dev

## Switch ENV

```ex
MIX_ENV=prod mix multi_db
```

## Create a custom 'my_custom' ENV

* Copy 'config/dev.exs' and 'config/dev.secret.exs'.
* Call and define the env
```ex
MIX_ENV=my_custom mix multi_db
```
This will re-compile.

## Check that specific configs has been loaded

```ex
IO.inspect Application.get_env(:elixir_backend, ElixirBackend.Repo)
```

## Custom MIX Variables

* [Mix/Environment variables (hexdocs.pm/mix)](https://hexdocs.pm/mix/Mix.html#module-environment-variables)
* [Configuring Elixir Libraries (michal.muskala.eu)](https://michal.muskala.eu/2017/07/30/configuring-elixir-libraries.html)

```shell
slow_timeout=100000 mix user -n "Janis Rullis"
```

```ex
System.get_env("slow_timeout")
```
> 10000

```shell
MIX_FUNKY=1 mix user -n "Janis Rullis"
```

```ex
System.get_env("MIX_FUNKY")
```
> 1

```ex
System.get_env("MIX_SPOOK")
```
> nil