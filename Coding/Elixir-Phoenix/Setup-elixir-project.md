# Setup Elixir project

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
