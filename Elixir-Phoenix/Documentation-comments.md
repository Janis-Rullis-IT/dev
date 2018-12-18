# [Documentation-comments](https://hexdocs.pm/elixir/writing-documentation.html)


## Alwys referr to methods with a full namespace

### Bad

```ex
# iex> create_user(%{})
```
> Bad because if You try to replicate this code then the method won't be found.

### Good

```ex
# iex> Backend.Account.create_user(%{})
```
> This will be executed correctly.


## Setup [ExDoc](https://github.com/elixir-lang/ex_doc/)


### Add tO `mix.exs` `deps`

```ex
def deps do
  [{:ex_doc, "~> 0.19", only: :dev, runtime: false}]
end
```

### Install deps

```ex
mix deps.get
```

### Gen docs

```ex
mix docs
```

### Location

docs/index.html

