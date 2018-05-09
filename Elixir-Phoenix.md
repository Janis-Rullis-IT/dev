# Elixir / Phoenix

* [Background Processing in Elixir with GenStage (medium.com/@scripbox_tech)](https://medium.com/@scripbox_tech/background-processing-in-elixir-with-genstage-efb6cb8ca94a)

## Install

```shell
wget https://packages.erlang-solutions.com/erlang-solutions_1.0_all.deb && sudo dpkg -i erlang-solutions_1.0_all.deb
sudo apt-get update
sudo apt-get install esl-erlang elixir -y
```

## Setup project

```shell
sudo chmod a+rwX build
mix deps.clean --all
mix compile
mix deps.get
```

## Editors

* VS Code with [vscode-elixir plugin](https://marketplace.visualstudio.com/items?itemName=mjmcloug.vscode-elixir)
and [ElixirLS](https://marketplace.visualstudio.com/items?itemName=JakeBecker.elixir-ls).

## Paths

* router - web/router.ex

## Snags

### Linter does not work

Elixir must be installed.

### Dependencies

```shell
mix deps.clean --all
mix deps.get
```