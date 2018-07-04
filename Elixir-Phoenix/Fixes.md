# Fixes

## [`mix: not found` when executed from cron](https://github.com/elixir-lang/elixir/issues/4612)

```shell
which mix
````
> /usr/local/bin/mix

```shell
sudo ln -s /usr/local/bin/mix /usr/bin/mix
```

## [`/usr/bin/env: 'elixir': No such file or directory`](https://stackoverflow.com/questions/39752072/mix-elixir-no-such-file-or-directory)

```shell
which elixir
````
> /usr/local/bin/elixir

```shell
sudo ln -s /usr/local/bin/elixir /usr/bin/elixir
```

```ex
ln -s /usr/local/bin/elixir /usr/bin/elixir
ln -s /usr/local/bin/mix /usr/bin/mix
ln -s /usr/local/bin/erl /usr/bin/erl
```

## beam failed: :badfile

```shell
mix clean
mix compile
```
or delete the '_build' folder and compile.