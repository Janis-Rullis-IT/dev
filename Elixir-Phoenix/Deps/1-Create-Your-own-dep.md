# Create Your own dep

## Init locally a new repo

```shell
cd YOUR_PROJECT/deps
git init incremental-slug
```

## Add it to deps

```ex
{:incremental_slug, path: "deps/incremental-slug"}
```

## Compile

```shell
mix
```
> Could not compile :incremental_slug, no "mix.exs", "rebar.config" or "Makefile" (pass :compile as an option to customize compilation, set it to "false" to do nothing)

## Setup the dep

* [Library Guidelines (hexdocs.pm/elixir)](https://hexdocs.pm/elixir/library-guidelines.html)
* [How to create and publish Hex.pm package (Elixir) (medium.com/kkempin)](https://medium.com/kkempin/how-to-create-and-publish-hex-pm-package-elixir-90cb33e2592d)
* Look into other deps to have an example.